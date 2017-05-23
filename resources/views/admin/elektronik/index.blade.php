@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_post'))

        <p class="alert alert-danger">{{ session('deleted_post') }}</p>

    @endif

    @if(Session::has('created_post'))

        <p class="alert alert-success">{{ session('created_post') }}</p>

    @endif

    @if(Session::has('updated_post'))

        <p class="alert alert-info">{{ session('updated_post') }}</p>

    @endif

    <h1>All Posts</h1>
  <div class="table-responsive">
      <table class="table">
          <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Owner</th>
              <th>Category</th>
              <th>Title</th>
              <th>Pershkrimi</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Editoje</th>
              <th>Fshije</th>
          </tr>
          </thead>
          <tbody>



          @if($elektronik_i_fat)

              @foreach($elektronik_i_fat as $post)

                  <tr style="background-color: green">
                      <td>{{ $post->id }}</td>

                      @if(count($post->photos) >= 1)
                          {{--@foreach($user->photos as $photo)--}}

                          <td><img height ="75" width="75" src ="{{ asset('storage').$post->photos->first()->threezerozero }}" alt=""  class="img-circle"></td>
                          {{--@endforeach--}}

                          {{--<td><img height ="50"src ="{{ $photo->path ? $photo->path : 'http://placehold.it/400x400' }}" alt=""></td>--}}

                      @else
                          <td><img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle"></td>
                      @endif

                      <td><a href="{{route('elektronik.edit', $post->id)}}">{{ $post->user->name }}</a></td>
                      <td>{{ $post->elektronik_cats ? $post->elektronik_cats->name : 'Uncategorized' }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ str_limit($post->pershkrimi, 20) }}</td>
                      <td>{{ $post->created_at->diffForHumans() }}</td>
                      <td>{{ $post->updated_at->diffForHumans() }}</td>
                      <td><a href="{{ url('/admin/elektronik/'. $post->id .'/edit') }}"><button class="btn btn-primary">edit</button></a> </td>
                      <td>{!! Form::open(['method'=>'DELETE', 'action'=>['Admin\ElektroniksController@destroy', $post->id]]) !!}

                          <div class="form-group">
                              {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                          </div>
                          {!! Form::close() !!}</td>
                  </tr>

              @endforeach
          @endif
          @if($elektronik)

              @foreach($elektronik as $post)
                  @if($post->i_faturuar == false)
                      <tr>
                          <td>{{ $post->id }}</td>

                          @if(count($post->photos) >= 1)
                              {{--@foreach($user->photos as $photo)--}}

                              <td><img height ="75" width="75" src ="{{ asset('storage').$post->photos->first()->threezerozero }}" alt=""  class="img-circle"></td>
                              {{--@endforeach--}}

                              {{--<td><img height ="50"src ="{{ $photo->path ? $photo->path : 'http://placehold.it/400x400' }}" alt=""></td>--}}

                          @else
                              <td><img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle"></td>
                          @endif

                          <td><a href="{{route('elektronik.edit', $post->id)}}">{{ $post->user->name }}</a></td>
                          <td>{{ $post->elektronik_cats ? $post->elektronik_cats->name : 'Uncategorized' }}</td>
                          <td>{{ $post->title }}</td>
                          <td>{{ str_limit($post->pershkrimi, 20) }}</td>
                          <td>{{ $post->created_at->diffForHumans() }}</td>
                          <td>{{ $post->updated_at->diffForHumans() }}</td>
                          <td><a href="{{ url('/admin/elektronik/'. $post->id .'/edit') }}"><button class="btn btn-primary">edit</button></a> </td>
                          <td>{!! Form::open(['method'=>'DELETE', 'action'=>['Admin\ElektroniksController@destroy', $post->id]]) !!}

                              <div class="form-group">
                                  {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                              </div>
                              {!! Form::close() !!}</td>
                      </tr>
                  @endif

              @endforeach

          @endif

          </tbody>
      </table>
  </div>





@endsection
@section('scripts')

    <script type="text/javascript" src="{{ asset('js/libs.js') }}">
    </script>
    @endsection