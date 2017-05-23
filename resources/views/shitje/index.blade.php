@extends('layouts.app')

@section('menu')
    @include('layouts.app-menu')
    @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('shitje.search-box')
            </div>
           <div class="col-sm-18">
               <div class="row">
                   @foreach($shitjet as $shitje)
                       <div class="col-sm-6">

                       @if(count($shitje->photos) >= 1)
                           <img class="img-responsive" src="{{ asset('storage').$shitje->photos->first()->threezerozero }}">
                       @else
                           <img height ="75"src ="{{ 'http://placehold.it/400x400' }}" alt=""  class="img-circle">
                       @endif
                       {{ $shitje->title }}
               </div>
                   @endforeach
               </div>
           </div>

    </div>
    </div>
    @endsection
@section('scripts')
    <script src="{{asset('js/bootstrap.js')}}"></script>


@endsection
