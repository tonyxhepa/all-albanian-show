<?php

namespace App\Http\Controllers\Admin;

use App\Orari;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrariController extends Controller
{
    public function index()
    {
        $oraret = Orari::all();

        return view('admin.orari.index', compact('oraret'));
    }

    public function store(Request $request)
    {
        $orari = new Orari;

        $orari->name = $request->name;

        $orari->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = Orari::findOrFail($id);

        $tag->delete();

        return redirect('admin/orari')->with('deleted_post', 'U fshije rregullisht');
    }
}
