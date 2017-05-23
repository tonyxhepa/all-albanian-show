<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\Femra;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\LajmeCat;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LajmeCatController extends Controller
{
    public function index($slug, Menu $menu)
    {
        $kategory = LajmeCat::where('slug', $slug)->first();

        return view('lajme.kategory.index', compact('kategory','menu'));
    }
}
