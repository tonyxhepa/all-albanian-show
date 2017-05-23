@extends('layouts.app')
@section('header')
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all-albanian-show.css') }}" rel="stylesheet">
    <script src="{{ asset('js/lightgallery.js') }}"></script>
@endsection
@section('menu')
    @include('layouts.app-menu')
@endsection
@section('content')
    <div class="container">
            <div class="col-sm-12">
                @if($kategory)
                    <div class="row">
                        <div class="catg_titile">{{ $kategory->name }}</div>
                    </div>

                    @foreach($kategory->lajmet->chunk(4) as $cat) <div class="row">
                        @foreach($cat as $barsoleta)
                        <div class="col-sm-3">
                            <a href="{{ url('/sport/'. $barsoleta->slug) }}">
                                @if(count($barsoleta->photos) >= 1)
                                    <img class="img-responsive" src="{{ asset('storage').$barsoleta->photos->first()->threezerozero }}">
                                @else
                                    <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                                @endif
                                {{ $barsoleta->title }}
                            </a>

                        </div>
                            @endforeach
                    </div>@endforeach

                @endif

            </div>
    </div>
@endsection
@section('scripts')
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