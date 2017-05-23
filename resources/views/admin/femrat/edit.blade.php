@extends('layouts.admin')
@section('stylesheet')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    <h1>Edit Post</h1>

    <div class="row">
        <h3>Ndryshoje Postoje</h3>
        @if(count($post->photos) >= 1)
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Kliko mbi x per te fshire foton
                </div>
                <div class="panel-body">
                    @foreach($post->photos as $photo)
                        <div class="col-sm-3">
                            <div class="alert alert-dismissible alert-warning">
                                <form method="post" action="/photos/{{ $photo->id }}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="close" >&times;</button>
                                </form>
                                <img height ="100"src ="{{ asset('storage').$photo->threezerozero }}" alt=""class ="img-rounded">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--<td><img height ="50"src ="{{ $photo->path ? $photo->path : 'http://placehold.it/400x400' }}" alt=""></td>--}}

        @else
            <td><img height ="50"src ="{{ 'http://placehold.it/200x200' }}" class ="img-responsive img-rounded" alt=""></td>
        @endif

    </div>
    @if(count($post->photos) <= 5)
    <div class="form-group">
        <form id="addPhotosForm" action="{{ action('Admin\FemraController@addPhoto', $post->id) }}"
              class="dropzone"
              id="my-awesome-dropzone">
            {{ csrf_field() }}
        </form>
    </div>
    @endif

    <form method="POST" action="{{ route('femrat.update', $post->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label  for="title">Title</label>
            <input value="{{ old('title', $post->title) }}" type="text" name="title" class="form-control">
        </div>
        <div id="app">
            <div class="form-group">
                <label for="femra_cats_id">argetim category</label>
                <select name="femra_cats_id" id="femra_cats_id" class="form-control" v-model="car_make_id" v-on:change="getCarModel()" v-bind:disabled="disableWhenSelect">
                    <option value="{{ old('femra_cats_id', $post->femra_cats->id) }}">{{ old('femra_cats_id', $post->femra_cats->name) }}</option>
                    @foreach($femra_cats as $item => $value)
                        <option value="{{ $item }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="pershkrimi">Pershkrimi</label>
            <textarea name="pershkrimi" class="form-control" rows="10">{{ old('pershkrimi', $post->pershkrimi) }}</textarea>
        </div>
        <div class="form-group">
            <label for="publikuesi">publikuesi</label>
            <input value="{{ old('publikuesi', $post->publikuesi) }}" type="text" name="publikuesi" class="form-control">

        </div>

        <div class="form-group">
            <select name="tag[]" class="form-control js-example-basic-multiple" multiple="multiple">
                @foreach ($tags as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary">
        </div>

    </form>



    @include('includes.form-error')


@endsection
@section('scripts')
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{asset('js/libs.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>

    <script type="text/javascript">
        $(".js-example-basic-multiple").select2().val({!! json_encode($post->tags()->pluck('tag_id')->all()) !!}).trigger('change');
    </script>
    <script>
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFilesize: 3,
            maxFiles: 5,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        };
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