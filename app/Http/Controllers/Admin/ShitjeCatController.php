<?php

namespace App\Http\Controllers\Admin;

use App\ShitjeCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShitjeCatController extends Controller
{
    public function index()
    {
        $shitje_cats = ShitjeCat::all();

        return view('admin.shitje_cat.index', compact('shitje_cats'));
    }

    public function store(Request $request)
    {
        $shitje_cat = new ShitjeCat;

        $shitje_cat->name = $request->name;

        $shitje_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = ShitjeCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/shitje_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
