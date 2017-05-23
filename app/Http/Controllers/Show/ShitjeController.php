<?php

namespace App\Http\Controllers\Show;

use App\Country;
use App\Shitje;
use App\Argetim;
use App\Femra;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use App\ShitjeCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShitjeController extends Controller
{
    public function index(Request $request)
    {
        $makina_menu = Makina::orderBy('updated_at', 'desk')->take(3)->get();
        $lajme_menu = Lajme::orderBy('updated_at', 'desk')->take(3)->get();
        $argetim_menu = Argetim::orderBy('updated_at', 'desk')->take(3)->get();
        $magazina_menu = Magazina::orderBy('updated_at', 'desk')->take(3)->get();
        $femrat_menu = Femra::orderBy('updated_at', 'desk')->take(3)->get();
        $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desk')->take(3)->get();
        $tech_menu = Tech::orderBy('updated_at', 'desk')->take(3)->get();
        $sport_menu = Sport::orderBy('updated_at', 'desk')->take(3)->get();


        $countries = Country::pluck('name', 'id')->all();
        $categories = ShitjeCat::pluck('name', 'id')->all();
        $shitjet = Shitje::orderBy('updated_at', 'desc')->paginate(10);
        return view('shitje.index', compact('shitjet', 'countries', 'categories',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));
    }

    public function show($slug)
    {
        $makina_menu = Makina::orderBy('updated_at', 'desk')->take(3)->get();
        $lajme_menu = Lajme::orderBy('updated_at', 'desk')->take(3)->get();
        $argetim_menu = Argetim::orderBy('updated_at', 'desk')->take(3)->get();
        $magazina_menu = Magazina::orderBy('updated_at', 'desk')->take(3)->get();
        $femrat_menu = Femra::orderBy('updated_at', 'desk')->take(3)->get();
        $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desk')->take(3)->get();
        $tech_menu = Tech::orderBy('updated_at', 'desk')->take(3)->get();
        $sport_menu = Sport::orderBy('updated_at', 'desk')->take(3)->get();

        $countries = Country::pluck('name', 'id')->all();
        $categories = ShitjeCat::pluck('name', 'id')->all();
        $shiko_shitjet = Shitje::where('slug',$slug)->first();
        $mnm = Shitje::where('slug', '!=', $slug)->orderBy('created_at', 'desk')->take(8)->get();

        return view('shitje.show', compact('shiko_shitjet', 'mnm', 'countries', 'categories',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));
    }

    public function search(Request $request, Shitje $shitje)
    {
        $shitje = $shitje->newQuery();

        if ($request->has('title')){
            $shitje->where('title', $request->input('title'));
        }


        if ($request->has('shitje_cats_id')){
            $shitje->whereHas('shitje_cats', function ($query) use ($request){
                $query->where('id', $request->input('shitje_cats_id'));
            });
        }

        if ($request->has('min_price')){
            $shitje->whereBetween('price', [$request->input('min_price'), 999999999]);
        }

        if ($request->has('min_price') && $request->has('max_price')){
            $shitje->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        if ($request->has('max_price')){
            $shitje->whereBetween('price', [0, $request->input('max_price')]);
        }
        if ($request->has('country_id')){
            $shitje->whereHas('country', function ($query) use ($request){
                $query->where('id', $request->input('country_id'));
            });
        }
        $get_shitje = $shitje->orderBy('updated_at', 'desc')->paginate(8);
        $makina_menu = Makina::orderBy('updated_at', 'desk')->take(3)->get();
        $lajme_menu = Lajme::orderBy('updated_at', 'desk')->take(3)->get();
        $argetim_menu = Argetim::orderBy('updated_at', 'desk')->take(3)->get();
        $magazina_menu = Magazina::orderBy('updated_at', 'desk')->take(3)->get();
        $femrat_menu = Femra::orderBy('updated_at', 'desk')->take(3)->get();
        $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desk')->take(3)->get();
        $tech_menu = Tech::orderBy('updated_at', 'desk')->take(3)->get();
        $sport_menu = Sport::orderBy('updated_at', 'desk')->take(3)->get();

        $countries = Country::pluck('name', 'id')->all();
        $categories = ShitjeCat::pluck('name', 'id')->all();

        return view('shitje.kerko', compact('get_shitje', 'countries', 'categories',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));

    }
}
