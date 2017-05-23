<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('admin.country.index', compact('countries'));
    }

    public function store(Request $request)
    {
        $country = new Country;

        $country->name = $request->name;

        $country->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = Country::findOrFail($id);

        $tag->delete();

        return redirect('admin/country')->with('deleted_post', 'U fshije rregullisht');
    }
}
