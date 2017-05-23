@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/real-estate.css') }}" rel="stylesheet">
    @endsection
@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('prona.search-box')
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach($pronat as $prona)
            <div class="col-sm-12">

                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media">
                        <a class="pull-left" href="#" target="_parent">
                            @if(count($prona->photos) >= 1)
                        <img class="img-responsive" width="180px" src="{{ asset('storage').$prona->photos->first()->threezerozero }}">
                @else
                    <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
            @endif
                        </a>
                <!-- Begin Listing: 609 W GRAVERS LN-->

                        <div class="clearfix visible-sm"></div>

                        <div class="media-body fnt-smaller">
                            <a href="#" target="_parent"></a>

                            <h4 class="media-heading">
                                <a href="#" target="_parent">{{ $prona->price }} <span style="color: green;">$</span> <p class="pull-right">{{ $prona->country->name }}</p></a></h4>


                            <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                <li>{{ $prona->sip }}</li>

                                <li style="list-style: none">|</li>

                                <li>{{ $prona->prona_cats->name }}</li>

                                <li style="list-style: none">|</li>

                                <li>{{ $prona->lloji }}</li>
                            </ul>

                            <p class="hidden-xs">Situated between fairmount
                                park and the prestigious philadelphia cricket
                                club, this beautiful 2+ acre property is truly
                                ...</p><span class="fnt-smaller fnt-lighter fnt-arial">{{ $prona->rruga }}</span>
                        </div>
                    </div>
                </div><!-- End Listing-->



            </div>
            @endforeach

        </div>
        <div class="row">
            @foreach($pronat as $dy)
                {{ $dy->title }}
                @endforeach
        </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script src="{{asset('js/vue.js')}}"></script>



@endsection
