@extends('layouts.admin')
@section('stylesheet')

@endsection
@section('content')

    <h2>Car Make</h2>

    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Fshije</th>
                </tr>
                </thead>
                <tbody>

                @if($car_makes)

                    @foreach($car_makes as $post)

                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                            <td>{{ $post->updated_at->diffForHumans() }}</td>
                            <td>{!! Form::open(['method'=>'DELETE', 'action'=>['Admin\CarMakeController@destroy', $post->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                                {!! Form::close() !!}</td>
                        </tr>

                    @endforeach

                @endif

                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            @if(session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            <form method="POST" action="{{ url('admin/car_make') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="car_make">Car Make</label>
                    <input type="text" name="car_make" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" name="create" class="btn btn-primary">
                </div>

            </form>

            @include('includes.form-error')
        </div>
    </div>

@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{asset('js/libs.js')}}"></script>

@endsection