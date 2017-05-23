<?php

namespace App\Http\Controllers\Admin;

use App\LajmeCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LajmeCatController extends Controller
{
    public function index()
    {
        $lajme_cats = LajmeCat::all();

        return view('admin.lajme_cat.index', compact('lajme_cats'));
    }

    public function store(Request $request)
    {
        $lajme_cat = new LajmeCat;

        $lajme_cat->name = $request->name;

        $lajme_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = LajmeCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/lajme_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
