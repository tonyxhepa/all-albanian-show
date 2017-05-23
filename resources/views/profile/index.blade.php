@inject('menu', App\Http\Utilities\Menu)
@extends('layouts.profile')
@section('style')
    <link href="{{ asset('css/all-albanian-show.css') }}" rel="stylesheet">
@endsection
@section('menu')
    @include('layouts.profile-menu')
@endsection
@section('content')
 @endsection
@section('scripts')
    <div class="container" style="min-height: 500px">
        <div class="row">
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Profili im
                    </div>
                    <div class="panel-body">

                        @if(Auth::user()->profile)
                            <label for="gjinia">Gjinia {{ Auth::user()->profile->gjinia->name }}</label>
                            @else
                        <p>ju nuk keni profile</p>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Makinat e mia
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Pronat e mia
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       Punet e mia
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      Elektroniket e mia
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       Shtijet e mia
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('footer')
    @include('layouts.footer')
    @endsection



