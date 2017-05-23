@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/all-albanian-show.css') }}" rel="stylesheet">
@endsection
@section('menu')
    @include('layouts.lajme-menu')
@endsection
@section('content')
    @foreach($kategory as $cat)
        @if($cat->slug == 'video')
            <div class="container">
                <div class="row" style="background-color: #8eb4cb;"><h3><a href="{{ url('Lajme/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>
                <div class="row" style="background-color: #8eb4cb;">
                    @foreach($cat->lajmet()->latest() as $four)
                        <div class="col-sm-3">
                            @if(count($four->photos) >= 1)
                                <img class="img-responsive" style="height: 90px;"  src="{{ asset('storage').$four->photos->first()->thumbnail }}" alt="">
                            @endif
                            {{ $four->title   }}
                        </div>
                    @endforeach
                </div>
            </div>
        @elseif($cat->slug == 'premier-liga')
            <div class="container">
                <div class="row" style="background-color: #8a6d3b;"><h3><a href="{{ url('Lajme/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>
                <div class="row" style="background-color: #8a6d3b;">
                    @foreach($cat->lajmet()->latest() as $four)
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
                <div class="row"><h3><a href="{{ url('lajme/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>


                <div class="row">
                    @foreach($cat->lajmet as $four)
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

@endsection

@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script src="{{asset('js/vue.js')}}"></script>
    {{--<script type="text/javascript" href="js/app.js"></script>--}}

@endsection
@section('footer')
    @include('layouts.footer')
    @endsection
