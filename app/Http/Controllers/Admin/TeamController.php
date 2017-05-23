<?php

namespace App\Http\Controllers\Admin;

use App\Competition;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $competitions = Competition::pluck('name','id')->all();

        return view('admin.team.index', compact('teams', 'competitions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'competition_id' => 'required',
        ]);

        $competition = Competition::findOrFail($request->competition_id);
        $team = $competition->team();
        $team->create([
            'name' => $request->name
        ]);

        return back();

    }

    public function destroy($id)
    {
        $tag = Team::findOrFail($id);

        $tag->delete();

        return redirect('admin/team')->with('deleted_post', 'U fshije rregullisht');
    }
}
