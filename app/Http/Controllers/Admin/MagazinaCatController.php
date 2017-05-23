<?php

namespace App\Http\Controllers\Admin;

use App\MagazinaCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MagazinaCatController extends Controller
{
    public function index()
    {
        $magazina_cats = MagazinaCat::all();

        return view('admin.magazina_cat.index', compact('magazina_cats'));
    }

    public function store(Request $request)
    {
        $magazina_cat = new MagazinaCat;

        $magazina_cat->name = $request->name;

        $magazina_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = MagazinaCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/magazina_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
