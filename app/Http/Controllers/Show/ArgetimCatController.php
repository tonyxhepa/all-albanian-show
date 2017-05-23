<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\ArgetimCat;
use App\Femra;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArgetimCatController extends Controller
{
    public function index($slug, Menu $menu)
    {

        $kategory = ArgetimCat::where('slug', $slug)->first();
        $me_te_fundit = Argetim::orderBy('updated_at', 'desc')->take(5)->get();
        $me_te_shikuarat = Argetim::orderBy('shikime', 'desc')->take(5)->get();

        return view('argetim.kategory.index', compact('kategory',
            'menu', 'me_te_shikuarat', 'me_te_fundit'));
    }
}
