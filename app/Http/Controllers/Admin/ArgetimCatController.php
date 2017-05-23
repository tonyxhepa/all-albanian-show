<?php

namespace App\Http\Controllers\Admin;

use App\ArgetimCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArgetimCatController extends Controller
{
    public function index()
    {
        $argetim_cats = ArgetimCat::all();

        return view('admin.argetim_cat.index', compact('argetim_cats'));
    }

    public function store(Request $request)
    {
        $argetim_cat = new ArgetimCat;

        $argetim_cat->name = $request->name;

        $argetim_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = ArgetimCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/argetim_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
