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
            <th>name</th>
            <th>slug</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Editoje</th>
            <th>Fshije</th>
        </tr>
        </thead>
        <tbody>

        @if($tags)

            @foreach($tags as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td><a href="{{ route('tag.edit', $post->id) }}">Edit</a> </td>
                    <td>{!! Form::open(['method'=>'DELETE', 'action'=>['Admin\TagController@destroy', $post->id]]) !!}

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