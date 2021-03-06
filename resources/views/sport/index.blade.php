@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/all-albanian-sport.css') }}" rel="stylesheet">
@endsection
@section('menu')
    @include('layouts.lajme-menu')
@endsection
@section('content')
    @foreach($competitions as $competition)
        @if($competition->slug == 'superliga')
            <div class="container">
                <div class="row" style="background-color: #8eb4cb;"><h3><a href="{{ url('sport/competition/'. $competition->slug) }}">{{ $competition->name }}</a> </h3></div>
                <div class="row" style="background-color: #8eb4cb;">
                    @foreach($competition->sport()->take(1)->get() as $nje)
                        {{ $nje->title }}
                        {{ $nje->pershkrimi }}
                    @endforeach
                        @foreach($competition->sport()->take(1)->skip(1)->get() as $nje)
                            {{ $nje->title }}
                            {{ $nje->pershkrimi }}
                        @endforeach
                        @foreach($competition->sport()->latest() as $four)

                        <div class="col-sm-3">
                            @if(count($four->photos) >= 1)
                                <img class="img-responsive" style="height: 90px;"  src="{{ asset('storage').$four->photos->first()->thumbnail }}" alt="">
                            @endif
                            {{ $four->title   }}
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif($competition->slug == 'premier-liga')
            <div class="container">
                <div class="row" style="background-color: #8a6d3b;"><h3><a href="{{ url('sport/competition/'. $competition->slug) }}">{{ $competition->name }}</a> </h3></div>
                <div class="row" style="background-color: #8a6d3b;">
                    @foreach($competition->sport()->latest() as $four)
                        <div class="col-sm-3">
                            @if(count($four->photos) >= 1)
                                <img class="img-responsive" style="height: 90px;"  src="{{ asset('storage').$four->photos->first()->thumbnail }}" alt="">
                            @endif
                            {{ $four->title   }}
                        </div>
                    @endforeach
                </div>
            </div>
        @else
    <div class="container">
            <div class="row"><h3><a href="{{ url('sport/competition/'. $competition->slug) }}">{{ $competition->name }}</a> </h3></div>


        <div class="row">
            @foreach($competition->sport()->latest() as $four)
                <div class="col-sm-3">
                    @if(count($four->photos) >= 1)
                    <img class="img-responsive" style="height: 90px;"  src="{{ asset('storage').$four->photos->first()->thumbnail }}" alt="">
                    @endif
                        {{ $four->title   }}
                </div>
            @endforeach
        </div>

    </div>
@endif
    @endforeach
    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="row header-row">--}}
                {{--<div class="col-lg-12 col-md-12 col-sm-24 col-xs-24">--}}

                    {{--<div class="row header-row">--}}
                        {{--@foreach($superliga_1 as $epara)--}}

                            {{--<div class="col-sm-12">--}}
                                {{--@if(count($epara->photos) >= 1)--}}
                                    {{--<img class="img-responsive height-233"  src="{{ asset('storage').$epara->photos->first()->thumbnail }}" alt="">--}}
                                {{--@endif--}}
                            {{--</div>--}}
                            {{--<a href="{{ url('/tech/'. $epara->slug) }}">--}}
                                {{--<div class="col-sm-12">--}}
                                    {{--<h3>{{ $epara->title }}</h3>--}}
                                    {{--<p>{{ $epara->pershkrimi }}</p>--}}
                                {{--</div>--}}
                            {{--</a>--}}

                        {{--@endforeach--}}
                    {{--</div>--}}
                    {{--<div class="row header-row">--}}
                        {{--@foreach($premier_kater as $tre)--}}
                            {{--<div class="col-sm-6 hover" >--}}

                                {{--<a href="{{ url('/tech/'. $tre->slug) }}">--}}
                                    {{--@if(count($tre->photos) >= 1)--}}
                                        {{--<img class="img-responsive" src="{{ asset('storage').$tre->photos->first()->threezerozero }}">--}}
                                    {{--@endif--}}
                                    {{--<p class="max-lines">{{ $tre->title }}</p>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 col-sm-24 col-xs-24">--}}
                    {{--<div class="row header-row">--}}
                        {{--@foreach($seria_a_kater as $katerta)--}}
                            {{--<div class="col-sm-12 col-xs-24">--}}
                                {{--<a href="{{ url('/tech/'. $katerta->slug) }}">--}}

                                    {{--<div class="imageHolder">--}}
                                        {{--@if(count($katerta->photos) >= 1)--}}
                                            {{--<img class="img-responsive height-233" src="{{ asset('storage').$katerta->photos->first()->thumbnail }}">--}}
                                        {{--@endif--}}
                                        {{--<h3 class="caption-bottom">{{ $katerta->title }}</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/sup-kosoves/') }}">Superliga Kosoves</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/sup-kosoves/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($sup_kosoves_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="news-row-menu">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li>--}}
                        {{--<a style="color: #eb9316" href="{{ url('/sport/superliga/') }}">Superliga</a>--}}
                    {{--</li>--}}

                    {{--<li class="pull-right hidden-xs">--}}
                        {{--<a href="{{ url('/sport/superliga/') }}">Te gjitha</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@foreach($superliga_news as $news)--}}
                {{--<div class="col-xs-16 col-sm-8 col-md-4">--}}
                    {{--<a href="{{ url('/femrat/'. $news->slug) }}">--}}
                        {{--@if(count($news->photos) >= 1)--}}
                            {{--<img class="img-responsive" src="{{ asset('storage'). $news->photos->first()->threezerozero }}">--}}
                        {{--@endif--}}
                        {{--<p>{{ $news->title }}</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        {{--</div>--}}
    {{--</div>--}}



@endsection
@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script src="{{asset('js/vue.js')}}"></script>
    {{--<script type="text/javascript" href="js/app.js"></script>--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="country_id"]').on('change', function() {
                var country_idID = $(this).val();
                if(country_idID) {
                    $.ajax({
                        url: '/mycityform/ajax/'+country_idID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {


                            $('select[name="city_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });

                        }
                    });
                }else{
                    $('select[name="city"]').empty();
                }
            });
        });
    </script>

    <script>
        var app = new Vue({
            el: "#app",
            data: {
                disableWhenSelect: false,
                car_make_id: "",
                carModel: "",
                modelShow: false,
            }, methods: {
                getCarModel: function () {
                    if (this.car_make_id !== '') {
                        this.modelShow = true;
                    } else {
                        this.modelShow = false;
                    }

                }
            }
        });
    </script>
    <script>
        var app1 = new Vue({
            el: "#app-1",
            data: {
                disableWhenSelect: false,
                country_id: "",
                cityModel: "",
                cityModelShow: false,
            }, methods: {
                getCountryModel: function () {
                    if (this.country_id !== '') {
                        this.cityModelShow = true;
                    } else {
                        this.cityModelShow = false;
                    }

                }
            }
        });
    </script>


@endsection
@section('footer')
    @include('layouts.footer')
@endsection
