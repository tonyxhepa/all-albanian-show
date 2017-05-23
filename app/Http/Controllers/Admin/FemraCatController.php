<?php

namespace App\Http\Controllers\Admin;

use App\FemraCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FemraCatController extends Controller
{
    public function index()
    {
        $femra_cats = FemraCat::all();

        return view('admin.femra_cat.index', compact('femra_cats'));
    }

    public function store(Request $request)
    {
        $femra_cat = new FemraCat;

        $femra_cat->name = $request->name;

        $femra_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = FemraCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/femra_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
