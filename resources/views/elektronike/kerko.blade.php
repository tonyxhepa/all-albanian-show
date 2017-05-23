@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                @if(Session::has('message'))
                    <div class="alert alert-danger">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>
            @include('elektronike.search-box')
            @include('includes.form-error')
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(count($get_elektronik) > 0)
            @foreach(array_chunk($get_elektronik->all(), 4) as $row)
                <div class="row">
                    @foreach($row as $makina)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            @if(count($makina->photos) >= 1)
                                <img class="img-responsive" src="{{ asset('storage').$makina->photos->first()->threezerozero }}">
                            @else
                                <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                            @endif
                            <div class="pull-left">
                                {{ $makina->title }}
                            </div>

                        </div>
                    @endforeach

                </div>
            @endforeach
            {{ $get_elektronik->appends(Request::only('search'))->links() }}
            @else
                <p>nuk ka makina</p>
        </div>

        @endif
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    {{--<script type="text/javascript" href="js/app.js"></script>--}}



@endsection
