<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\Country;
use App\Femra;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Prona;
use App\PronaCat;
use App\Sport;
use App\Tech;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PronaController extends Controller
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
        $categories = PronaCat::pluck('name', 'id')->all();
        $pronat = Prona::orderBy('updated_at', 'desc')->take(2)->skip(1)->get();
        return view('prona.index', compact('pronat', 'countries', 'categories',
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
        $categories = PronaCat::pluck('name', 'id')->all();

        $shiko_pronat = Prona::where('slug',$slug)->first();
        $mnm = Prona::where('slug', '!=', $slug)->orderBy('created_at', 'desk')->take(8)->get();

        return view('prona.show', compact('shiko_pronat', 'mnm', 'countries', 'categories',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));
    }

    public function search(Request $request, Prona $prona)
    {
        $makina_menu = Makina::orderBy('updated_at', 'desk')->take(3)->get();
        $lajme_menu = Lajme::orderBy('updated_at', 'desk')->take(3)->get();
        $argetim_menu = Argetim::orderBy('updated_at', 'desk')->take(3)->get();
        $magazina_menu = Magazina::orderBy('updated_at', 'desk')->take(3)->get();
        $femrat_menu = Femra::orderBy('updated_at', 'desk')->take(3)->get();
        $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desk')->take(3)->get();
        $tech_menu = Tech::orderBy('updated_at', 'desk')->take(3)->get();
        $sport_menu = Sport::orderBy('updated_at', 'desk')->take(3)->get();

        $prona = $prona->newQuery();

        if ($request->has('title')){
            $prona->where('title', 'like', "%{$request->input('title')}%");
        }


        if ($request->has('prona_cats_id')){
            $prona->whereHas('prona_cats', function ($query) use ($request){
                $query->where('id', $request->input('prona_cats_id'));
            });
        }

        if ($request->has('min_price')){
            $prona->whereBetween('price', [$request->input('min_price'), 999999999]);
        }

        if ($request->has('min_price') && $request->has('max_price')){
            $prona->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        if ($request->has('max_price')){
            $prona->whereBetween('price', [0, $request->input('max_price')]);
        }

        if ($request->has('min_price') & $request->has('max_pprice')){
            $prona->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        if ($request->has('country_id')){
            $prona->whereHas('country', function ($query) use ($request){
                $query->where('id', $request->input('country_id'));
            });
        }
        $get_prona = $prona->orderBy('updated_at', 'desc')->paginate(8);

        $countries = Country::pluck('name', 'id')->all();
        $categories = PronaCat::pluck('name', 'id')->all();

        return view('prona.kerko', compact('get_prona', 'countries', 'categories',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));

    }
}
