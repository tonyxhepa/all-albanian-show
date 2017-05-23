@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('puna.search-box')
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach($punet as $puna)
                @if(count($puna->photos) >= 1)
                    <img src="{{ asset('storage').$puna->photos->first()->threezerozero }}">
                @else
                    <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                @endif
                {{ $puna->title }}
            @endforeach

        </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>

@endsection

