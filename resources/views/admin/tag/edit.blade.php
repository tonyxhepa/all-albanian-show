@extends('layouts.admin')


@section('content')

    <h1>Edit Tag</h1>

    <form method="POST" action="{{ route('tag.update', $tag) }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label  for="tag">Tag</label>
            <input type="text" name="tag" value="{{ old('name', $tag->name) }}" class="form-control">
        </div>


        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary">
        </div>

    </form>



    @include('includes.form-error')


@endsection
@section('scripts')

    <script type="text/javascript" src="{{ url('js/libs.js') }}"></script>


@endsection