<?php

namespace App\Http\Controllers\Admin;

use App\CarMake;
use App\CarModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarModelController extends Controller
{
    public function index()
    {
        $car_models = CarModel::all();
        $car_makes = CarMake::pluck('name','id')->all();

        return view('admin.car_model.index', compact('car_models', 'car_makes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'car_model' => 'required|max:255',
            'car_make_id' => 'required',
        ]);

       $car_make = CarMake::findOrFail($request->car_make_id);
       $car_model = $car_make->car_model();
       $car_model->create([
           'name' => $request->car_model
       ]);

        return back();
    }

    public function destroy($id)
    {
        $tag = CarModel::findOrFail($id);

        $tag->delete();

        return redirect('admin/car_model')->with('deleted_post', 'U fshije rregullisht');
    }
}
