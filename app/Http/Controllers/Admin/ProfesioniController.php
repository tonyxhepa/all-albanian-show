<?php

namespace App\Http\Controllers\Admin;

use App\Profesioni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProfesioniController extends Controller
{
    public function index()
    {
        $profesionet = Profesioni::all();

        return view('admin.profesioni.index', compact('profesionet'));
    }

    public function store(Request $request)
    {
        $profesioni = new Profesioni;

        $profesioni->name = $request->name;

        $profesioni->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = Profesioni::findOrFail($id);

        $tag->delete();

        return redirect('admin/profesioni')->with('deleted_post', 'U fshije rregullisht');
    }
}
