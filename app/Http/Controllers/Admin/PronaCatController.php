<?php

namespace App\Http\Controllers\Admin;

use App\PronaCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PronaCatController extends Controller
{
    public function index()
    {
        $prona_cats = PronaCat::all();

        return view('admin.prona_cat.index', compact('prona_cats'));
    }

    public function store(Request $request)
    {
        $prona_cat = new PronaCat;

        $prona_cat->name = $request->name;

        $prona_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = PronaCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/prona_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
