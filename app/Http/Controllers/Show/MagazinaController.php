<?php

namespace App\Http\Controllers\Show;


use App\Http\Utilities\Menu;
use App\Magazina;
use App\MagazinaCat;
use App\Http\Controllers\Controller;

class MagazinaController extends Controller
{
    public function index(Menu $menu)
    {

        $kategory = MagazinaCat::orderBy('id')->get();

        return view('magazina.index', compact( 'kategory',
            'menu'));
    }


    public function show($slug, Menu $menu)
    {

        $shiko_magazinat = Magazina::where('slug',$slug)->first();
        $mnm = Magazina::where('slug', '!=', $slug)->orderBy('created_at', 'desk')->take(3)->get();

        return view('magazina.show', compact('shiko_magazinat', 'mnm',
            'menu'));
    }


}
