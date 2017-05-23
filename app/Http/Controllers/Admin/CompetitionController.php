<?php

namespace App\Http\Controllers\Admin;

use App\Competition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();

        return view('admin.competition.index', compact('competitions'));
    }

    public function store(Request $request)
    {
        $competition = new Competition;

        $competition->name = $request->name;

        $competition->save();

        return back();
    }

    public function destroy($id)
    {
        $tag = Competition::findOrFail($id);

        $tag->delete();

        return redirect('admin/competition')->with('deleted_post', 'U fshije rregullisht');
    }
}
