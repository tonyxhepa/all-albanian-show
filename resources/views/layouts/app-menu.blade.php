<nav class="navbar navbar-toggleable-md navbar-main navbar-fixed-top" role="navigation" style="opacity: 1;">
    <div class="container">
        <!-- Brand and toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1" style="background-color: #00BCD4">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
                <span class="icon-bar" style="background-color: #0f0f0f"></span>
            </button>
        </div>

        <!-- Collect the nav links,  -->
        <div class="collapse navbar-collapse navbar-1" style="margin-top: 0px;">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu_cat() as $lajme_menu_cat)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu_cat->slug) }}">{{ $lajme_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu_photo)
                            <li class="col-md-3 hidden-sm hidden-xs">
                                <ul class="list-unstyled">

                                    <a href="">
                                        <li class="thumbnail">
                                            @if(count($lajme_menu_photo->photos) > 0)
                                                <img class="img-responsive"  src="{{ asset('storage').$lajme_menu_photo->photos->first()->threezerozero }}" alt="">
                                            @endif
                                        </li>
                                        <li>{{ $lajme_menu_photo->title }}</li>
                                    </a>
                                </ul>
                            </li>
                            @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Sport</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/sport/') }}">Kryesoret</a> </li>
                                @foreach($menu->competition_menu_one() as $sport_menu)
                                    <li><a href="{{ url('/sport/competition/'. $sport_menu->slug) }}">{{ $sport_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->sport_menu() as $sport_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($sport_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$sport_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $sport_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Magazina</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/magazina/') }}">Kryesoret</a> </li>
                                @foreach($menu->magazina_menu_cat() as $magazina_menu_cat)
                                    <li><a href="{{ url('/magazina/kategory/'. $magazina_menu_cat->slug) }}">{{ $magazina_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->magazina_menu() as $magazina_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($magazina_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$magazina_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $magazina_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Femrat</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/femrat/') }}">Kryesoret</a> </li>
                                @foreach($menu->femrat_menu_cat() as $femra_menu_cat)
                                    <li><a href="{{ url('/lajme/kategory/'. $femra_menu_cat->slug) }}">{{ $femra_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->femrat_menu() as $femra_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($femra_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$femra_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $femra_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Kuzhina</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/kuzhina/') }}">Kryesoret</a> </li>
                                @foreach($menu->kuzhina_menu_cat() as $kuzhina_menu_cat)
                                    <li><a href="{{ url('/kuzhina/kategory/'. $kuzhina_menu_cat->slug) }}">{{ $kuzhina_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->kuzhina_menu() as $kuzhina_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($kuzhina_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$kuzhina_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $kuzhina_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Tech</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/tech/') }}">Kryesoret</a> </li>
                                @foreach($menu->tech_menu_cat() as $tech_menu_cat)
                                    <li><a href="{{ url('/tech/kategory/'. $tech_menu_cat->slug) }}">{{ $tech_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->tech_menu() as $tech_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($tech_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$tech_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $tech_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="{{ url('/prona/') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Argetim</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/argetim/') }}">Kryesoret</a> </li>
                                @foreach($menu->argetim_menu_cat() as $argetim_menu_cat)
                                    <li><a href="{{ url('/argetim/kategory/'. $argetim_menu_cat->slug) }}">{{ $argetim_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->argetim_menu() as $argetim_menu_photo)
                                <li class="col-md-3 hidden-sm hidden-xs">
                                    <ul class="list-unstyled">

                                        <a href="{{ url('/argetim/'. $argetim_menu_photo->slug) }}">
                                            <li class="thumbnail">
                                                @if(count($argetim_menu_photo->photos) > 0)
                                                    <img class="img-responsive"  src="{{ asset('storage').$argetim_menu_photo->photos->first()->threezerozero }}" alt="">
                                                @endif
                                            </li>
                                            <li>{{ $argetim_menu_photo->title }}</li>
                                        </a>
                                    </ul>
                                </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Makina</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/makina/') }}">Kryesoret</a> </li>
                                @foreach($menu->makina_menu_cat() as $makina_menu_cat)
                                    <li><a href="{{ url('/makina/'. $makina_menu_cat->slug) }}">{{ $makina_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->makina_menu() as $makina_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($makina_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$makina_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $makina_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>

                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="{{ url('/prona/') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Prona</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/prona/') }}">Kryesoret</a> </li>
                                @foreach($menu->prona_menu_cat() as $prona_menu_cat)
                                    <li><a href="{{ url('/prona/'. $prona_menu_cat->slug) }}">{{ $prona_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->prona_menu() as $prona_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($prona_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$prona_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $prona_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Puna</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/pubna/') }}">Kryesoret</a> </li>
                                @foreach($menu->puna_menu_cat() as $puna_menu_cat)
                                    <li><a href="{{ url('/puna/'. $puna_menu_cat->slug) }}">{{ $puna_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->puna_menu() as $puna_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($puna_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$puna_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $puna_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Elektronike</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/elektronike/') }}">Kryesoret</a> </li>
                                @foreach($menu->elektronike_menu_cat() as $elektronike_menu_cat)
                                    <li><a href="{{ url('/elektronike/kategory/'. $elektronike_menu_cat->slug) }}">{{ $elektronike_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->elekronike_menu() as $elektronike_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($elektronike_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$elektronike_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $elektronike_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Shtije</a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/shitje/') }}">Kryesoret</a> </li>
                                @foreach($menu->shitjet_menu_cat() as $shitjet_menu_cat)
                                    <li><a href="{{ url('/shitje/kategory/'. $shitjet_menu_cat->slug) }}">{{ $shitjet_menu_cat->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->shitjet_menu() as $shitjet_menu_photo)
                                    <li class="col-md-3 hidden-sm hidden-xs">
                                        <ul class="list-unstyled">

                                            <a href="">
                                                <li class="thumbnail">
                                                    @if(count($shitjet_menu_photo->photos) > 0)
                                                        <img class="img-responsive"  src="{{ asset('storage').$shitjet_menu_photo->photos->first()->threezerozero }}" alt="">
                                                    @endif
                                                </li>
                                                <li>{{ $shitjet_menu_photo->title }}</li>
                                            </a>
                                        </ul>
                                    </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>



<div class="middleBar">
    <div class="container">
        <div class="row display-table">
            <div class="col-sm-3 vertical-align text-left hidden-xs">
                <a href="javascript:void(0);"> <img width="" src="https://lh3.googleusercontent.com/-r0Fhzz-so14/WNf9-4M65JI/AAAAAAAAD3E/ht6IhlL9gG4ujE2Hqiq70U3jBb6KQmaAQCL0B/w80-d-h43-p-rw/logo-2.png" alt=""></a>
            </div>
            <!-- end col -->
            <div class="col-sm-6 vertical-align text-center">
                <img class="img-responsive" style="margin-bottom: 5px" src="{{ asset('storage/banner/banner-header.jpg') }}">
                {{--<form>--}}
                {{--<div class="row">--}}
                {{--<div class="col-sm-12">--}}
                {{--<input type="text" name="keyword" class="form-control input-lg" placeholder="Search">--}}
                {{--</div>--}}
                {{--<!-- end col -->--}}
                {{--<div class="col-sm-6">--}}
                {{--<select class="form-control input-lg" name="category">--}}
                {{--<option value="all">All Categories</option>--}}
                {{--<optgroup label="Mens">--}}
                {{--<option value="shirts">Shirts</option>--}}
                {{--<option value="coats-jackets">Coats & Jackets</option>--}}
                {{--<option value="underwear">Underwear</option>--}}
                {{--<option value="sunglasses">Sunglasses</option>--}}
                {{--<option value="socks">Socks</option>--}}
                {{--<option value="belts">Belts</option>--}}
                {{--</optgroup>--}}
                {{--<optgroup label="Womens">--}}
                {{--<option value="bresses">Bresses</option>--}}
                {{--<option value="t-shirts">T-shirts</option>--}}
                {{--<option value="skirts">Skirts</option>--}}
                {{--<option value="jeans">Jeans</option>--}}
                {{--<option value="pullover">Pullover</option>--}}
                {{--</optgroup>--}}
                {{--<option value="kids">Kids</option>--}}
                {{--<option value="fashion">Fashion</option>--}}
                {{--<optgroup label="Sportwear">--}}
                {{--<option value="shoes">Shoes</option>--}}
                {{--<option value="bags">Bags</option>--}}
                {{--<option value="pants">Pants</option>--}}
                {{--<option value="swimwear">Swimwear</option>--}}
                {{--<option value="bicycles">Bicycles</option>--}}
                {{--</optgroup>--}}
                {{--<option value="bags">Bags</option>--}}
                {{--<option value="shoes">Shoes</option>--}}
                {{--<option value="hoseholds">HoseHolds</option>--}}
                {{--<optgroup label="Technology">--}}
                {{--<option value="tv">TV</option>--}}
                {{--<option value="camera">Camera</option>--}}
                {{--<option value="speakers">Speakers</option>--}}
                {{--<option value="mobile">Mobile</option>--}}
                {{--<option value="pc">PC</option>--}}
                {{--</optgroup>--}}
                {{--</select>--}}
                {{--</div>--}}
                {{--<!-- end col -->--}}
                {{--<div class="col-sm-6">--}}
                {{--<input type="submit" class="btn btn-default btn-block btn-lg" value="Search">--}}
                {{--</div>--}}
                {{--<!-- end col -->--}}
                {{--</div>--}}
                {{--<!-- end row -->--}}
                {{--</form>--}}
            </div>
            <!-- end col -->
            <div class="col-sm-3 vertical-align header-items hidden-xs">
                <div class="header-item mr-5">
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fa fa-heart-o"></i> <sub>32</sub> </a>
                </div>
                <div class="header-item">
                    <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare"> <i class="fa fa-refresh"></i> <sub>2</sub> </a>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end  row -->
    </div>
</div>
<!--=========MIDDEL-TOP_BAR============-->

<nav class="navbar navbar-default" style="border: none;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="">Menu</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    @if(Auth::user()->isAdmin())
                        <li><a href="{{ url('/admin') }}">Admin</a> </li>
                    @endif
                @endif
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url(Auth::user()->slug.'/profile') }}">Profile</a> </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!--=========-TOP_BAR============-->



