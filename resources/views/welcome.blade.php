@inject('menu', App\Http\Utilities\Menu)
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
            <div class="content_top">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm6">
                        <div class="latest_slider">
                            <div class="slick_slider">
                                @foreach($lajme_kater_1 as $lajme_1)
                                    <div class="single_iteam"><img class="img-responsive" src="{{ asset('storage').$lajme_1->photos->first()->fivefivezero }}" alt="">
                                        <h2><a class="slider_tittle" href="{{ url('/lajme/'. $lajme_1->slug) }}">{{ $lajme_1->title }}</a></h2>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm6">
                        <div class="content_top_right">
                            <ul class="featured_nav wow fadeInDown">
                                @foreach($lajme_kater_2 as $lajme_2)
                                    <li><img src="{{ asset('storage').$lajme_2->photos->first()->thumbnail }}" alt="">
                                        <div class="title_caption"><a href="pages/single.html">{{ $lajme_2->title }}</a></div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_middle">

                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="content_middle_leftbar">
                        <div class="single_category wow fadeInDown">
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category1</a> </h2>
                            <ul class="catg1_nav">
                                @foreach($competition as $sport_shqip)
                                    @if($sport_shqip->slug === 'superliga')
                                        @foreach($sport_shqip->sport()->take(2)->latest() as $superliga)
                                <li>
                                    <div class="catgimg_container"> <a href="{{ url('/sport/'. $superliga->slug) }}" class="catg1_img"><img alt="" src="{{ asset('storage').$superliga->photos->first()->thumbnail }}"></a></div>
                                    <h3 class="post_titile"><a href="{{ url('/sport/'. $superliga->slug) }}">{{truncate( $superliga->title, 250) }}</a></h3>
                                </li>
                               @endforeach
                                    @endif
                                    @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="content_middle_middle">
                        <div class="slick_slider2">
                            @foreach($competition as $sport_seria_a)
                            @if($sport_seria_a->slug === 'seria-a')
                                @foreach($sport_seria_a->sport()->take(4)->latest() as $seria_a)
                            <div class="single_featured_slide"> <a href="pages/single.html"><img src="{{ asset('storage').$seria_a->photos->first()->thumbnail }}" alt=""></a>
                                <h2><a href="pages/single.html">{{ $seria_a->title }}</a></h2>
                                <p>{{ truncate($seria_a->pershkrimi, 150) }}</p>
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
                            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category2</a> </h2>
                            <ul class="catg1_nav">
                                @foreach($competition as $sport_premier_liga)
                                @if($sport_premier_liga->slug === 'premier-liga')
                                    @foreach($sport_premier_liga->sport()->take(2)->latest() as $premier_liga)
                                <li>
                                    <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{{ asset('storage').$premier_liga->photos->first()->thumbnail }}"></a></div>
                                    <h3 class="post_titile"><a href="pages/single.html">{{ truncate($premier_liga->title, 250) }}</a></h3>
                                </li>
                               @endforeach
                                    @endif
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Magazina</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($magazina_cat as $magazina_e_pare)
                                        @if($magazina_e_pare->id === 1)
                                            @foreach($magazina_e_pare->magazinat()->take(1)->latest() as $magaz_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/magazina/'. $magaz_1->slug) }}"><img alt="" src="{{ asset('storage').$magaz_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/magazina/'. $magaz_1->slug) }}">{{ $magaz_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="{{ url('/magazina/'. $magaz_1->slug) }}">Read More...</a></span> </div>
                                                    <p>{{ $magaz_1->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($magazina_cat as $magazina_e_dyte)
                                        @if($magazina_e_dyte->id === 2)
                                            @foreach($magazina_e_dyte->magazinat()->take(3)->latest() as $magaz_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$magaz_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $magaz_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($magazina_cat as $magazina_e_pare)
                                        @if($magazina_e_pare->id === 3)
                                            @foreach($magazina_e_pare->magazinat()->take(1)->latest() as $magaz_1)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$magaz_1->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $magaz_1->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $magaz_1->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($magazina_cat as $magazina_e_dyte)
                                        @if($magazina_e_dyte->id === 4)
                                            @foreach($magazina_e_dyte->magazinat()->take(3)->latest() as $magaz_2)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$magaz_2->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $magaz_2->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetimi_i_pare->slug) }}"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom">
                <div class="content_bottom_left">
                    <div class="single_category wow fadeInDown">
                        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="fashion_catgnav">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 1)
                                            @foreach($argetim_list_name->argetims()->take(1)->latest() as $argetimi_i_pare)
                                                <li>
                                                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="{{ asset('storage').$argetimi_i_pare->photos->first()->thumbnail }}"></a> </div>
                                                    <h2 class="catg_titile"><a href="pages/single.html">{{ $argetimi_i_pare->title }}</a></h2>
                                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                                    <p>{{ $argetimi_i_pare->pershkrimi }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 wow fadeInDown">
                                <ul class="small_catg">
                                    @foreach($argetim_cat as $argetim_list_name)
                                        @if($argetim_list_name->id === 2)
                                            @foreach($argetim_list_name->argetims()->take(3)->latest() as $argetimi_i_dyte)
                                                <li>
                                                    <div class="media wow fadeInDown"> <a class="media-left tony" href="pages/single.html"><img src="{{ asset('storage').$argetimi_i_dyte->photos->first()->thumbnail }}" alt=""></a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="pages/single.html">{{ $argetimi_i_dyte->title }} </a></h4>
                                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@section('footer')
    @include('layouts.footer')
    @endsection
@section('scripts')

    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    <script src="{{ asset('js/show/jquery.min.js') }}"></script>
    <script src="{{ asset('js/show/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/show/wow.min.js') }}"></script>
    <script src="{{ asset('js/show/slick.min.js') }}"></script>
    <script src="{{ asset('js/show/custom.js') }}"></script>

@endsection
