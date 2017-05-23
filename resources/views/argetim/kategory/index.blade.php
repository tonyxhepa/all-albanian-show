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
            <div class="content_bottom">
                <div class="col-lg-8 col-md-8">
                    <div class="content_bottom_left">
                        <div class="single_category wow fadeInDown">
                            <div class="archive_style_1">
                                <div style="margin-top:15px;">
                                    <ol class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ url('/argetim/kategory/'. $kategory->slug) }}">{{ $kategory->name }}</a></li>
                                    </ol>
                                </div>
                                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Te fundit</span> </h2>
                                @foreach($kategory->argetims()->paginate(15) as $argetim)
                                <div class="business_category_left wow fadeInDown">
                                    <ul class="fashion_catgnav">

                                        <li>
                                            <div class="catgimg2_container"> <a href="{{ url('/argetim/'. $argetim->slug) }}"><img alt="" src="{{ asset('storage').$argetim->photos->first()->threezerozero }}"></a> </div>
                                            <h2 class="catg_titile"><a href="{{ url('/argetim/'. $argetim->slug) }}">{{ $argetim->title }}</a></h2>
                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                            <p>{{ truncate($argetim->pershkrimi, 20) }}</p>
                                        </li>

                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pagination_area">
                        <nav>
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="content_bottom_right">
                        <div class="single_bottom_rightbar">
                            <h2>Te Fundit nga Argetimi</h2>
                            <ul class="small_catg popular_catg wow fadeInDown">
                                @foreach($me_te_fundit as $mtsh)
                                <li>
                                    <div class="media wow fadeInDown"> <a href="{{ url('/argetim/'. $mtsh->slug) }}" class="media-left"> <img alt="" src="{{ asset('storage').$mtsh->photos->first()->threezerozero }}"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{ url('/argetim/'. $mtsh->slug) }}">{{ $mtsh->title }}</a></h4>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single_bottom_rightbar">
                            <h2>Me te shikuarat</h2>
                            <ul class="small_catg popular_catg wow fadeInDown">
                                @foreach($me_te_shikuarat as $mtsh)
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="{{ url('/argetim/'. $mtsh->slug) }}" class="media-left"> <img alt="" src="{{ asset('storage').$mtsh->photos->first()->threezerozero }}"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="{{ url('/argetim/'. $mtsh->slug) }}">{{ $mtsh->title }}</a></h4>
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
    <script src="{{ asset('js/show/jquery.min.js') }}"></script>
    <script src="{{ asset('js/show/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/show/wow.min.js') }}"></script>
    <script src="{{ asset('js/show/slick.min.js') }}"></script>
    <script src="{{ asset('js/show/custom.js') }}"></script>
@endsection