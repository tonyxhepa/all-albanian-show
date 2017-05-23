@extends('layouts.lajme')
@section('header')
    <title>{{ $shiko_lajmet->title }}</title>
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all-albanian-show.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lightgallery.js') }}"></script>
@endsection
@section('menu')
    @include('layouts.lajme-menu')
@endsection
@section('content')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <section id="mainContent">
            <div class="content_bottom">
                <div class="col-lg-8 col-md-8">
                    <div class="content_bottom_left">
                        <div class="single_page_area">
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/lajme/') }}">Lajme</a></li>
                                <li class="active">{{ $shiko_lajmet->slug }} </li>
                            </ol>
                            <h2 class="post_titile">{{ $shiko_lajmet->title }} </h2>
                            <div class="single_page_content">
                            <div class="single_page_content">
                                <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>elablee.com</a> <span><i class="fa fa-calendar"></i>{{ $shiko_lajmet->created_at->format('d M Y') }}</span> <a href="#"><i class="fa fa-tags"></i>Lajme</a> </div>

                                <div class="row">
                                    @if(count($shiko_lajmet->photos) >=1)
                                        <img class="img-center img-responsive" src="{{ asset('storage').$shiko_lajmet->photos->first()->fivefivezero }}">

                                                <div id="aniimated-thumbnials" >
                                                    @foreach($shiko_lajmet->photos as $photo)
                                                    <a href="{{ asset('storage').$photo->thumbnail }}" data-lightbox="roadtrip" data-title="{{ $shiko_lajmet->title }}">
                                                        <img class="col-sm-2 img-responsive" src="{{ asset('storage').$photo->threezerozero }}">
                                                    </a>
                                                    @endforeach
                                                </div>
                                    @endif
                                </div>

                               <p>{{ $shiko_lajmet->pershkrimi }}</p>

                            </div>
                        </div>
                    </div>
                    {{--<div class="post_pagination">--}}
                        {{--<div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>--}}
                            {{--<div class="pagincontent"> <span>Previous Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>--}}
                        {{--</div>--}}
                        {{--<div class="next">--}}
                            {{--<div class="pagincontent"> <span>Next Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>--}}
                            {{--<a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a> </div>--}}
                    {{--</div>--}}
                    <div class="share_post"> <a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a> <a class="googleplus" href="#"><i class="fa fa-google-plus"></i>Google+</a> <a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a> <a class="stumbleupon" href="#"><i class="fa fa-stumbleupon"></i>StumbleUpon</a> <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a> </div>
                    <div class="similar_post">
                        <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
                        <ul class="small_catg similar_nav wow fadeInDown animated">
                            @foreach($category as $cat)
                            <li>
                                <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="{{ asset('storage').$cat->photos->first()->threezerozero }}" alt=""></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{ $cat->title }}</a></h4>

                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="content_bottom_right">
                        <div class="single_bottom_rightbar">
                            <h2>Te fundit</h2>
                            <ul class="small_catg popular_catg wow fadeInDown">
                                @foreach($mnm as $mdm)
                                <li>
                                    <div class="media wow fadeInDown"> <a href="{{ url('/lajme/'. $mdm->slug) }}" class="media-left"><img alt="" style="width: 120px;" src="{{ asset('storage').$mdm->photos->first()->threezerozero }}"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{ url('/lajme/'. $mdm->slug) }}">{{ $mdm->title }} </a></h4>

                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
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