@extends('layouts.app')
@section('header')
    <title>{{ $shiko_argetimin->title }}</title>
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lightgallery.js') }}"></script>
@endsection
@section('menu')
    @include('layouts.app-menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="font-size: 48px; font-weight: 200;-webkit-font-smoothing: antialiased; color: #798992;">{{ $shiko_argetimin->title }}</h1>

            </div>

        </div>
        <div class="row">
            <div class="col-xs-24 col-sm-12 col-md-18">
                <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="well-sm">
                        <div class="pull-right"><i class="glyphicon glyphicon-tags"><span style="color: green;"> Argetim</span> </i> <i class="glyphicon glyphicon-calendar"></i> {{ $shiko_argetimin->created_at->format('d M Y - H:i:s') }}  shikime </div>
                    </div>
       <hr>
                        <div class="row">
                            @if(count($shiko_argetimin->photos) >=1)
                                <div class="text-center">
                                    <img class="thumbnail img-responsive" src="{{ asset('storage').$shiko_argetimin->photos()->first()->thumbnail }}">

                                </div>

                                <div id="aniimated-thumbnials">
                                    @foreach($shiko_argetimin->photos as $photo)

                                        <a class="col-sm-6" href="{{ asset('storage').$photo->thumbnail }}" data-lightbox="gallery" data-title="{{ $shiko_argetimin->title }}">
                                            <img class="thumbnail img-responsive" src="{{ asset('storage').$photo->thumbnail }}">
                                        </a>
                                    @endforeach

                                </div>
                            @endif
                        </div>

                            <div class="">{{ $shiko_argetimin->pershkrimi }}</div>



                    </div>
                    @if($shiko_argetimin->embeds)
                        <div class="well">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/AsYIJc_F4yE" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                </div>
                </div>

            </div>
            <div class="col-xs-24 col-sm-12 col-md-6">
                <div style="padding-left: 10px; background-color: #8eb4cb;">
                    <h3>Me shume nga kjo marke</h3>
                    @foreach($mnm as $mdm)
                        <div class="card-style-sm botom-solid">
                            <a href="{{ url('makina/'. $mdm->slug) }}">
                                <div class="media">
                                    <div class="media-left">
                                        @if(count($mdm->photos) >= 1)
                                            <img class="media-object card-img-sm" src="{{ asset('storage').$mdm->photos->first()->threezerozero }}">
                                        @else
                                            <img class="media-object card-img-sm" src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ str_limit($mdm->title, $limit = 12, $end = '...') }}</h4>
                                        <div class="members pull-left">{{ str_limit($mdm->pershkrimi, $limit = 45, $end = '...') }}</div>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            @include('includes.form-error')
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57f1735ebcfa6c0d"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script>
        $('#aniimated-thumbnials').lightGallery({
            thumbnail:true
        });
    </script>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection