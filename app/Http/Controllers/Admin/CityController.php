<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $countries = Country::pluck('name','id')->all();

        return view('admin.city.index', compact('cities', 'countries'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'countries_id' => 'required',
        ]);

        $country = Country::findOrFail($request->countries_id);
        $city = $country->city();
        $city->create([
            'name' => $request->name
        ]);

        return back();
    }

    public function destroy($id)
    {
        $tag = City::findOrFail($id);

        $tag->delete();

        return redirect('admin/city')->with('deleted_post', 'U fshije rregullisht');
    }
}
