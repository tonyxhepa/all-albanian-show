@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('elektronike.search-box')
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($elektroniket as $makina)
            <div class="col-sm-6">
                  @if(count($makina->photos) >= 1)
                      <img src="{{ asset('storage').$makina->photos->first()->threezerozero }}">
                  @else
                      <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                  @endif
                  {{ $makina->title }}


          </div>
            @endforeach
        </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    {{--<script type="text/javascript" href="js/app.js"></script>--}}



@endsection
