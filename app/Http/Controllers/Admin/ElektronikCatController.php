<?php

namespace App\Http\Controllers\Admin;

use App\ElektronikCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElektronikCatController extends Controller
{
    public function index()
    {
        $elektronik_cats = ElektronikCat::all();

        return view('admin.elektronik_cat.index', compact('elektronik_cats'));
    }

    public function store(Request $request)
    {
        $elektronik_cat = new ElektronikCat;

        $elektronik_cat->name = $request->name;

        $elektronik_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = ElektronikCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/elektronik_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
