<div class="row">
        <form method="get" action="{{ url('/shitje/kerko') }}">
            <div class="row">
                <div class="col-sm-20 col-sm-offset-2">
                    <div class="form-group">
                        <label for="title">Kerko sipas titullit</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="col-sm-20 col-sm-offset-2">
                    <div class="form-group">
                        <label for="title">Select cats:</label>
                        <select name="shitje_cats_id" id="shitje_cats_id" class="form-control" v-model="country_id" v-on:change="getCountryModel()" v-bind:disabled="disableWhenSelect">
                            <option value="">--- Select cats ---</option>
                            @foreach ($categories as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-20 col-sm-offset-2">
                    <div id="app-1">
                        <div class="form-group">
                            <label for="title">Select State:</label>
                            <select name="country_id" id="country_id" class="form-control" v-model="country_id" v-on:change="getCountryModel()" v-bind:disabled="disableWhenSelect">
                                <option value="">--- Select State ---</option>
                                @foreach ($countries as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-20 col-sm-offset-2">
                    <div class="form-group">
                        <label for="min_price">Min Price</label>
                        <input type="number" name="min_price" class="form-control">
                    </div>
                </div>
                <div class="col-sm-20 col-sm-offset-2">
                    <div class="form-group">
                        <label for="max_price">Max Price</label>
                        <input type="number" name="max_price" class="form-control">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-default">Search</button>
        </form>
    @include('includes.form-error')
    <hr>

</div>
