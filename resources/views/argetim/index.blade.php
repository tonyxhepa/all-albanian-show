@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/all-albanian-show.css') }}" rel="stylesheet">
@endsection
@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <section id="mainContent">
            <div class="content_middle">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="content_middle_leftbar">
                        @foreach($kategory as $argetimi_1)
                        <div class="single_category wow fadeInDown">
                            @if($argetimi_1->id === 1)
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="{{ url('/argetim/'. $argetimi_1->slug) }}" class="title_text">{{ $argetimi_1->name}}</a> </h2>
                            <ul class="catg1_nav">
                                @foreach($argetimi_1->argetims()->skiptake(0,2) as $dy)
                                <li>
                                    <div class="catgimg_container"> <a href="single.html" class="catg1_img"> <img alt="" src="{{ asset('storage').$dy->photos->first()->fivefivezero }}"> </a> </div>
                                    <h3 class="post_titile"><a href="single.html">{{ $dy->title }}</a></h3>
                                </li>
                                @endforeach
                            </ul>
                                @endif
                        </div>
                            @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content_middle_middle">
                        <div class="slick_slider2">
                            @foreach($kategory as $cat)
                                @if($cat->id === 2)
                                    @foreach($cat->argetims()->skiptake(0,3) as $argetim_1)
                            <div class="single_featured_slide"> <a href="{{ url('/argetim/'. $cat->slug) }}"><img src="{{ asset('storage').$dy->photos->first()->fivefivezero }}" alt=""></a>
                                <h2><a href="single.html">{{ $argetim_1->title }}</a></h2>
                            </div>
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="content_middle_rightbar">
                        <div class="single_category wow fadeInDown">
                            @foreach($kategory as $cat)
                                @if($cat->id === 3)
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="archive1.html" class="title_text">{{ $cat->name }}</a> </h2>
                            <ul class="catg1_nav">

                                        @foreach($cat->argetims()->skiptake(0,2) as $argetim_tre)
                                    <li>
                                        <div class="catgimg_container"> <a href="single.html" class="catg1_img"> <img alt="" src="{{ asset('storage').$argetim_tre->photos->first()->threezerozero }}"> </a> </div>
                                        <h3 class="post_titile"><a href="single.html">{{ $argetim_tre->title }}</a></h3>
                                    </li>
                                        @endforeach


                            </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        @foreach($kategory as $cat)
                            @if($cat->id === 1)
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="{{ url('/argetim/'. $cat->slug) }}">{{ $cat->name }}</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">

                                            @foreach($cat->argetims()->skiptake(0,1) as $argetim_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetim_1->slug) }}"><img alt="" src="{{ asset('storage').$argetim_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetim_1->slug) }}">{{ $argetim_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">{{ $argetim_1->created_at->format('d M Y - H:i:s') }}</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="{{ url('/argetim/'. $argetim_1->slug) }}">Read More...</a></span> </div>
                                                </li>
                                            @endforeach

                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(1,3) as $arget_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $arget_2->slug) }}"><img src="{{ asset('storage').$arget_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $arget_2->slug) }}">{{ $arget_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                            @foreach($cat->argetims()->skiptake(4,1) as $aret_3)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $aret_3->slug) }}"><img alt="" src="{{ asset('storage').$aret_3->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $aret_3->slug) }}">{{ $aret_3->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                </li>
                                            @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(5,3) as $argetim_4)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetim_4->slug) }}"><img src="{{ asset('storage').$argetim_4->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetim_4->slug) }}">{{ $argetim_4->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                </ul>
                            </div>
                        </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        @foreach($kategory as $cat)
                            @if($cat->id === 2)
                                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="{{ url('/argetim/'. $cat->slug) }}">{{ $cat->name }}</a> </h2>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">

                                            @foreach($cat->argetims()->skiptake(0,1) as $argetim_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetim_1->slug) }}"><img alt="" src="{{ asset('storage').$argetim_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetim_1->slug) }}">{{ $argetim_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">{{ $argetim_1->created_at->format('d M Y - H:i:s') }}</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="{{ url('/argetim/'. $argetim_1->slug) }}">Read More...</a></span> </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(1,3) as $arget_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $arget_2->slug) }}"><img src="{{ asset('storage').$arget_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $arget_2->slug) }}">{{ $arget_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">
                                            @foreach($cat->argetims()->skiptake(4,1) as $aret_3)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $aret_3->slug) }}"><img alt="" src="{{ asset('storage').$aret_3->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $aret_3->slug) }}">{{ $aret_3->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(5,3) as $argetim_4)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetim_4->slug) }}"><img src="{{ asset('storage').$argetim_4->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetim_4->slug) }}">{{ $argetim_4->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        @foreach($kategory as $cat)
                            @if($cat->id === 3)
                                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="{{ url('/argetim/'. $cat->slug) }}">{{ $cat->name }}</a> </h2>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">

                                            @foreach($cat->argetims()->skiptake(0,1) as $argetim_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetim_1->slug) }}"><img alt="" src="{{ asset('storage').$argetim_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetim_1->slug) }}">{{ $argetim_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">{{ $argetim_1->created_at->format('d M Y - H:i:s') }}</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="{{ url('/argetim/'. $argetim_1->slug) }}">Read More...</a></span> </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(1,3) as $arget_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $arget_2->slug) }}"><img src="{{ asset('storage').$arget_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $arget_2->slug) }}">{{ $arget_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">
                                            @foreach($cat->argetims()->skiptake(4,1) as $aret_3)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $aret_3->slug) }}"><img alt="" src="{{ asset('storage').$aret_3->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $aret_3->slug) }}">{{ $aret_3->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(5,3) as $argetim_4)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetim_4->slug) }}"><img src="{{ asset('storage').$argetim_4->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetim_4->slug) }}">{{ $argetim_4->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        @foreach($kategory as $cat)
                            @if($cat->id === 4)
                                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="{{ url('/argetim/'. $cat->slug) }}">{{ $cat->name }}</a> </h2>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">

                                            @foreach($cat->argetims()->skiptake(0,1) as $argetim_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetim_1->slug) }}"><img alt="" src="{{ asset('storage').$argetim_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetim_1->slug) }}">{{ $argetim_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">{{ $argetim_1->created_at->format('d M Y - H:i:s') }}</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="{{ url('/argetim/'. $argetim_1->slug) }}">Read More...</a></span> </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(1,3) as $arget_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $arget_2->slug) }}"><img src="{{ asset('storage').$arget_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $arget_2->slug) }}">{{ $arget_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="fashion_catgnav">
                                            @foreach($cat->argetims()->skiptake(4,1) as $aret_3)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $aret_3->slug) }}"><img alt="" src="{{ asset('storage').$aret_3->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $aret_3->slug) }}">{{ $aret_3->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6 wow fadeInDown">
                                        <ul class="small_catg">
                                            @foreach($cat->argetims()->skiptake(5,3) as $argetim_4)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetim_4->slug) }}"><img src="{{ asset('storage').$argetim_4->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetim_4->slug) }}">{{ $argetim_4->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>


    @endsection
@section('scripts')
    <script src="{{ asset('js/show/jquery.min.js') }}"></script>
    <script src="{{ asset('js/show/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/show/wow.min.js') }}"></script>
    <script src="{{ asset('js/show/slick.min.js') }}"></script>
    <script src="{{ asset('js/show/custom.js') }}"></script>
@endsection
