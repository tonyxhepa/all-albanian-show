@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
@endsection
@section('content')
    @foreach($kategory as $cat)
        @if($cat->slug == 'video')
            <div class="container">
                <div class="row" style="background-color: #8eb4cb;"><h3><a href="{{ url('kuzhina/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>
                <div class="row" style="background-color: #8eb4cb;">
                    @foreach($cat->kuzhinat()->latest() as $four)
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
                <div class="row" style="background-color: #8a6d3b;"><h3><a href="{{ url('kuzhina/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>
                <div class="row" style="background-color: #8a6d3b;">
                    @foreach($cat->kuzhinat()->latest() as $four)
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
                <div class="row"><h3><a href="{{ url('kuzhina/kategory/'. $cat->slug) }}">{{ $cat->name }}</a> </h3></div>


                <div class="row">
                    @foreach($cat->kuzhinat as $four)
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="car_make_id"]').on('change', function() {
                var car_make_idID = $(this).val();
                if(car_make_idID) {
                    $.ajax({
                        url: '/mycarform/ajax/'+car_make_idID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {


                            $('select[name="car_model_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="car_model_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });

                        }
                    });
                }else{
                    $('select[name="car_model_id"]').empty();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="country_id"]').on('change', function() {
                var country_idID = $(this).val();
                if(country_idID) {
                    $.ajax({
                        url: '/mycityform/ajax/'+country_idID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {


                            $('select[name="city_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });

                        }
                    });
                }else{
                    $('select[name="city"]').empty();
                }
            });
        });
    </script>

    <script>
        var app = new Vue({
            el: "#app",
            data: {
                disableWhenSelect: false,
                car_make_id: "",
                carModel: "",
                modelShow: false,
            }, methods: {
                getCarModel: function () {
                    if (this.car_make_id !== '') {
                        this.modelShow = true;
                    } else {
                        this.modelShow = false;
                    }

                }
            }
        });
    </script>
    <script>
        var app1 = new Vue({
            el: "#app-1",
            data: {
                disableWhenSelect: false,
                country_id: "",
                cityModel: "",
                cityModelShow: false,
            }, methods: {
                getCountryModel: function () {
                    if (this.country_id !== '') {
                        this.cityModelShow = true;
                    } else {
                        this.cityModelShow = false;
                    }

                }
            }
        });
    </script>


@endsection
