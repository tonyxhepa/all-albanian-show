@extends('layouts.admin')

@section('stylesheet')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
        <h1>Create Post</h1>
        @if(session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        <form method="POST" action="{{ url('admin/argetim') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label  for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div id="app">
                <div class="form-group">
                    <label for="argetim_cats_id">argetim category</label>
                    <select name="argetim_cats_id" id="argetim_cats_id" class="form-control" v-model="car_make_id" v-on:change="getCarModel()" v-bind:disabled="disableWhenSelect">
                        <option value="">--- Select Category ---</option>
                        @foreach($argetim_cats as $item => $value)
                            <option value="{{ $item }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="pershkrimi">Pershkrimi</label>
                <textarea name="pershkrimi" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="publikuesi">publikuesi</label>
                <input type="text" name="publikuesi" class="form-control">

            </div>

            <div class="form-group">
                <label for="tag">Tag</label>
                <select name="tag[]" class="form-control js-example-basic-multiple" multiple="multiple">
                    @foreach ($tags as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <input type="submit" name="create" class="btn btn-primary">
            </div>

        </form>

    @include('includes.form-error')

@endsection
@section('scripts')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{asset('js/libs.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
    </script>
@endsection