@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-24">
                <div class="sidebar-search"></div>
                @include('makina.search-box')
            </div>
          <div class="col-sm-18 col-xs-24">
              <div class="container">
                  <div class="row">

                      @foreach($cars as $makina)
                          <div class="col-sm-3">
                              @if(count($makina->photos) >= 1)
                                  <img class="img-responsive" src="{{ asset('storage').$makina->photos->first()->threezerozero }}">
                              @else
                                  <img class="img-responsive" src ="{{ 'http://placehold.it/400x400' }}" alt="">
                              @endif
                              {{ $makina->title }}
                          </div>

                      @endforeach

                  </div>
              </div>
          </div>
        </div>
    </div>

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
