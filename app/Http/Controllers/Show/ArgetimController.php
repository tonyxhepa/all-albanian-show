<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\ArgetimCat;
use App\Country;
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

class ArgetimController extends Controller
{
    //

    public function index(Menu $menu)
    {
        $dy_argetime = Argetim::orderBy('updated_at', 'desc')->take(2)->get();
        $dy_pas_argetime = Argetim::orderBy('updated_at', 'desc')->skip(2)->take(2)->get();
        $kater_argetime = Argetim::orderBy('updated_at', 'desc')->skip(4)->take(4)->get();

        $kategory = ArgetimCat::orderBy('id')->get();
        
        return view('argetim.index', compact('kategory',
            'menu', 'dy_argetime', 'dy_pas_argetime', 'kater_argetime'));
    }

    public function show($slug, Menu $menu)
    {
        $shiko_argetimin = Argetim::where('slug', $slug)->first();
        $shikime = $shiko_argetimin->update([
            'shikime' => $shiko_argetimin->shikime + 1
        ]);
        $mnm = Argetim::where('argetim_cats_id', $shiko_argetimin->argetim_cats->id)->orderBy('updated_at', 'desc')->take(6)->get();

        return view('argetim.show', compact('shiko_argetimin', 'menu', 'mnm', 'shikime'));

    }
}
