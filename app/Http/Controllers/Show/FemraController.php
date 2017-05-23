<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\Country;
use App\Femra;
use App\FemraCat;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FemraController extends Controller
{
    public function index(Request $request, Menu $menu)
    {

        $kategory = FemraCat::orderBy('id')->get();

        return view('femrat.index', compact('kategory',
            'familjet', 'mode_kater', 'modat', 'karrierat','menu'));
    }


    public function show($slug, Menu $menu)
    {

        $shiko_femrat = Femra::where('slug',$slug)->first();
        $mnm = Femra::where([
            ['slug', '!=', $slug],
            ['femra_cats_id', $shiko_femrat->femra_cats->id]

        ])->orderBy('created_at', 'desk')->take(8)->get();

        return view('femrat.show', compact('shiko_femrat', 'mnm','menu'));
    }

}
