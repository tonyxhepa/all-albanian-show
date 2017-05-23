<?php

namespace App\Http\Controllers\Admin;

use App\TechCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechCatController extends Controller
{
    public function index()
    {
        $tech_cats = TechCat::all();

        return view('admin.tech_cat.index', compact('tech_cats'));
    }

    public function store(Request $request)
    {
        $tech_cat = new TechCat;

        $tech_cat->name = $request->name;

        $tech_cat->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = TechCat::findOrFail($id);

        $tag->delete();

        return redirect('admin/tech_cat')->with('deleted_post', 'U fshije rregullisht');
    }
}
