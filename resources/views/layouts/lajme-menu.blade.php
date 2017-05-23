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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Sport <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/sport/') }}">Kryesoret</a> </li>
                                @foreach($menu->competition_menu_one() as $sport_menu)
                                    <li><a href="{{ url('/sport/competition/'. $sport_menu->slug) }}">{{ $sport_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->competition_menu_one() as $sport_menu)
                            @if($sport_menu->slug === 'superliga')
                                @foreach($sport_menu->sport()->take(3)->latest() as $sport_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Magazina <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/magazina/') }}">Kryesoret</a> </li>
                                @foreach($menu->magazina_menu() as $magazina_menu)
                                    <li><a href="{{ url('/magazina/kategory/'. $magazina_menu->slug) }}">{{ $magazina_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->magazina_menu() as $magazina_menu)
                            @if($magazina_menu->slug === 'vip')
                                @foreach($magazina_menu->magazinat()->take(3)->latest() as $magazina_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Makina <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/makina/') }}">Kryesoret</a> </li>
                                @foreach($menu->makina_menu() as $makina_menu)
                                    <li><a href="{{ url('/makina/'. $makina_menu->slug) }}">{{ $makina_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->makina_menu() as $makina_menu)
                            @foreach($makina_menu->makina()->take(3)->latest() as $makina_menu_photo)
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
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="{{ url('/prona/') }}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Prona <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/prona/') }}">Kryesoret</a> </li>
                                @foreach($menu->prona_menu() as $prona_menu)
                                    <li><a href="{{ url('/prona/'. $prona_menu->slug) }}">{{ $prona_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->prona_menu() as $prona_menu)
                            @foreach($prona_menu->pronat()->take(3)->latest() as $prona_menu_photo)
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
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Puna <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/pubna/') }}">Kryesoret</a> </li>
                                @foreach($menu->puna_menu() as $puna_menu)
                                    <li><a href="{{ url('/puna/'. $puna_menu->slug) }}">{{ $puna_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->puna_menu() as $puna_menu)
                            @if($puna_menu->slug === 'shqiperia')
                                @foreach($puna_menu->puna()->take(3)->latest() as $puna_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Lajme <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu row" style="border-bottom: 2px solid red;">
                        <li class="col-sm-3 col-xs-24">
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
                                @foreach($menu->lajme_menu() as $lajme_menu)
                                    <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
                                @endforeach
                            </ul>
                        </li>
                        @foreach($menu->lajme_menu() as $lajme_menu)
                            @if($lajme_menu->slug === 'shqiperia')
                                @foreach($lajme_menu->lajmet()->take(3)->latest() as $lajme_menu_photo)
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
                            @endif
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

<nav class="navbar navbar-default">
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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/lajme/') }}">Kryesoret</a> </li>
            @foreach($menu->lajme_menu() as $lajme_menu)
                <li><a href="{{ url('/lajme/kategory/'. $lajme_menu->slug) }}">{{ $lajme_menu->name }}</a> </li>
            @endforeach
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
        </div>
    </div>
</nav><!--=========-TOP_BAR============-->



