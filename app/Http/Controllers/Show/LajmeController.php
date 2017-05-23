<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\Country;
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
use Illuminate\Support\Facades\DB;

class LajmeController extends Controller
{
    public function index(Menu $menu)
    {

        $kategory = LajmeCat::orderBy('id')->get();
        return view('lajme.index', compact('kategory', 'menu'));
    }


    public function show($slug, Menu $menu)
    {
         $shiko_lajmet = Lajme::where('slug',$slug)->first();
        $mnm = Lajme::where([
            ['title', '!=', $shiko_lajmet->title],
             ['lajme_cats_id', '=', $shiko_lajmet->lajme_cats->id]
        ])->orderBy('created_at', 'desk')->take(8)->get();
        $category = Lajme::where('lajme_cats_id', '!=', $shiko_lajmet->lajme_cats->id)->orderBy('updated_at', 'desc')->take(3)->get();

        return view('lajme.show', compact('shiko_lajmet', 'mnm', 'menu', 'category'
           ));
    }


}
