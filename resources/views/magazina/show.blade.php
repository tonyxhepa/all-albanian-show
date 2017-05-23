@extends('layouts.app')
@section('header')
    <title>{{ $shiko_magazinat->title }}</title>
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lightgallery.js') }}"></script>
@endsection
@section('style')
    <link href="{{ asset('css/show/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show/style.css') }}" rel="stylesheet">
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
                       <div class="single_page_area">
                           <ol class="breadcrumb">
                               <li><a href="{{ url('/') }}">Home</a></li>
                               <li><a href="{{ url('/magazina/'.$shiko_magazinat->magazina_cats->slug ) }}">{{ $shiko_magazinat->magazina_cats->name }}</a></li>
                               <li class="active">{{ $shiko_magazinat->slug }}</li>
                           </ol>
                           <h2 class="post_titile">{{ $shiko_magazinat->title }}</h2>
                           <div class="single_page_content">
                               <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>{{ $shiko_magazinat->created_at->format('d M Y - H:i:s') }}</span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
                               <img class="img-center" src="{{ asset('storage').$shiko_magazinat->photos->first()->thumbnail }}" alt="">
                               <p>{{ $shiko_magazinat->pershkrimi }}</p>
                           </div>
                       </div>
                   </div>
                   <div class="post_pagination">
                       <div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>
                           <div class="pagincontent"> <span>Previous Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
                       </div>
                       <div class="next">
                           <div class="pagincontent"> <span>Next Post</span> <a href="#">Aliquam quam orci in molestie a tempor nec</a> </div>
                           <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a> </div>
                   </div>
                   <div class="share_post"> <a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a> <a class="googleplus" href="#"><i class="fa fa-google-plus"></i>Google+</a> <a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a> <a class="stumbleupon" href="#"><i class="fa fa-stumbleupon"></i>StumbleUpon</a> <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a> </div>
                   <div class="similar_post">
                       <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
                       <ul class="small_catg similar_nav wow fadeInDown animated">
                           <li>
                               <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                   <div class="media-body">
                                       <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                   <div class="media-body">
                                       <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                   <div class="media-body">
                                       <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                       <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                   </div>
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="col-lg-4 col-md-4">
                   <div class="content_bottom_right">
                       <div class="single_bottom_rightbar">
                           <h2>Recent Post</h2>
                           <ul class="small_catg popular_catg wow fadeInDown">
                               @foreach($mnm as $recent)
                                   <li>
                                       <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="{{ asset('storage').$recent->photos->first()->thumbnail }}"> </a>
                                           <div class="media-body">
                                               <h4 class="media-heading"><a href="#">{{ $recent->title }}</a></h4>
                                               <p>{{ $recent->pershkrimi }}</p>                                       </div>
                                       </div>
                                   </li>
                                   @endforeach
                           </ul>
                       </div>
                       <div class="single_bottom_rightbar">
                           <ul role="tablist" class="nav nav-tabs custom-tabs">
                               <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
                               <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
                           </ul>
                           <div class="tab-content">
                               <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                                   <ul class="small_catg popular_catg wow fadeInDown">
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                   </ul>
                               </div>
                               <div id="recentComent" class="tab-pane fade" role="tabpanel">
                                   <ul class="small_catg popular_catg">
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                                               <div class="media-body">
                                                   <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                                                   <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                                               </div>
                                           </div>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="single_bottom_rightbar">
                           <h2>Blog Archive</h2>
                           <div class="blog_archive wow fadeInDown">
                               <form action="#">
                                   <select>
                                       <option value="">Blog Archive</option>
                                       <option value="">October(20)</option>
                                   </select>
                               </form>
                           </div>
                       </div>
                       <div class="single_bottom_rightbar wow fadeInDown">
                           <h2>Popular Lnks</h2>
                           <ul>
                               <li><a href="#">Blog</a></li>
                               <li><a href="#">Blog Home</a></li>
                               <li><a href="#">Error Page</a></li>
                               <li><a href="#">Social link</a></li>
                               <li><a href="#">Login</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-24 col-sm-12 col-md-18">
                <div class="row">
                    <div class="pull-right">Publikuar: {{ $shiko_magazinat->created_at->format('d M Y - H:i:s') }}</div>
                </div>
                <div class="row">
                    @if(count($shiko_magazinat->photos) >=1)

                        <div id="aniimated-thumbnials">
                            @foreach($shiko_magazinat->photos as $photo)
                                <a class="col-sm-6" href="{{ asset('storage').$photo->thumbnail }}" data-lightbox="roadtrip" data-title="{{ $shiko_magazinat->title }}">
                                    <img class="thumbnail img-responsive" src="{{ asset('storage').$photo->threezerozero }}">
                                </a>
                            @endforeach
                        </div>


                    @endif
                </div>

                <div class="">
                    <h3> {{ $shiko_magazinat->title }}</h3>
                    <div class="">{{ $shiko_magazinat->pershkrimi }}</div>
                </div>
            </div>
            <div class="col-xs-24 col-sm-12 col-md-6">
                <h3>Te fundit</h3>
                @foreach($mnm as $mdm)
                    <div class="card-style-sm botom-solid">
                        <a href="{{ url('magazina/'. $mdm->slug) }}">
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