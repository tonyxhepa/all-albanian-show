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

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Editoje</th>
            <th>Fshije</th>
        </tr>
        </thead>
        <tbody>

        @if($techs)

            @foreach($techs as $post)

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

                    <td><a href="{{route('tech.edit', $post->id)}}">{{ $post->user->name }}</a></td>
                    <td>{{ $post->tech_cats ? $post->tech_cats->name : 'Uncategorized' }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ str_limit($post->pershkrimi, 20) }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td><a href="{{ url('/admin/tech/'. $post->id .'/edit') }}"><button class="btn btn-primary">edit</button></a> </td>
                    <td>{!! Form::open(['method'=>'DELETE', 'action'=>['Admin\TechController@destroy', $post->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection
@section('scripts')
    <script src="{{asset('js/libs.js')}}"></script>


@endsection