<?php

namespace App\Http\Controllers\Admin;

use App\CarMake;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarMakeController extends Controller
{
    public function index()
    {
        $car_makes = CarMake::all();

        return view('admin.car_make.index', compact('car_makes'));
    }

    public function store(Request $request)
    {
        $car_make = new CarMake;

        $car_make->name = $request->car_make;

        $car_make->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = CarMake::findOrFail($id);

        $tag->delete();

        return redirect('admin/car_make')->with('deleted_post', 'U fshije rregullisht');
    }
}
