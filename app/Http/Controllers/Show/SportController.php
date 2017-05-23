<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\Competition;
use App\Country;
use App\Femra;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\SportCat;
use App\Team;
use App\Tech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportController extends Controller
{
    public function index(Menu $menu)
    {

        $competitions = Competition::orderBy('id')->get();


        return view('sport.index', compact('competitions','menu'));
    }


    public function show($slug, Menu $menu)
    {

        $shiko_sportin = Sport::where('slug',$slug)->first();
        $mnm = Sport::where('slug', '!=', $slug)->orderBy('created_at', 'desk')->take(8)->get();

        return view('sport.show', compact('shiko_sportin', 'mnm','menu'));
    }

}
