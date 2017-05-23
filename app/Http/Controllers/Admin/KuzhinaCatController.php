<?php

namespace App\Http\Controllers\Admin;

use App\KuzhinaCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KuzhinaCatController extends Controller
{
    public function index()
    {
        $kuzhina_cats = KuzhinaCat::all();

        return view('admin.kuzhina_cat.index', compact('kuzhina_cats'));
    }

    public function store(Request $request)
    {
        $kuzhina_cat = new KuzhinaCat;

        $kuzhina_cat->name = $request->name;

        $kuzhina_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = KuzhinaCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/kuzhina_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
