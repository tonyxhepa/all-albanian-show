<?php

namespace App\Http\Controllers\Admin;

use App\Gjinia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GjiniaController extends Controller
{
    public function index()
    {
        $gjinia = Gjinia::all();

        return view('admin.gjinia.index', compact('gjinia'));
    }

    public function store(Request $request)
    {
        $gjinia = new Gjinia();

        $gjinia->name = $request->name;

        $gjinia->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = Gjinia::findOrFail($id);

        $tag->delete();

        return redirect('admin/gjinia')->with('deleted_post', 'U fshije rregullisht');
    }
}
