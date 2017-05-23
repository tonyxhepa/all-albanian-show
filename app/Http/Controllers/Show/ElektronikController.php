<?php

namespace App\Http\Controllers\Show;

use App\Country;
use App\Elektronik;
use App\Argetim;
use App\Femra;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use App\ElektronikCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElektronikController extends Controller
{
    public function index(Request $request, Menu $menu)
    {
        $countries = Country::pluck('name', 'id')->all();
        $categories = ElektronikCat::pluck('name', 'id')->all();
        $elektroniket = Elektronik::orderBy('updated_at', 'desc')->paginate(10);
        return view('elektronike.index', compact('elektroniket', 'countries', 'categories','menu'));
    }

    public function show($slug, Menu $menu)
    {
        $countries = Country::pluck('name', 'id')->all();
        $categories = ElektronikCat::pluck('name', 'id')->all();

        $shiko_elektroniket = Elektronik::where('slug',$slug)->first();

        $shiimet = $shiko_elektroniket->update([
            'shikime' => $shiko_elektroniket->shikime + 1
        ]);
        $mnm = Elektronik::where('slug', '!=', $slug)->orderBy('created_at', 'desk')->take(8)->get();

        return view('elektronike.show', compact('shiko_elektroniket', 'mnm','countries', 'categories',
         'menu'));
    }

    public function search(Request $request, Elektronik $elektronik, Menu $menu)
    {

        $countries = Country::pluck('name', 'id')->all();
        $categories = ElektronikCat::pluck('name', 'id')->all();

        $elektronik = $elektronik->newQuery();

        if ($request->has('title')){
            $elektronik->where('title', $request->input('title'));
        }


        if ($request->has('elektronik_cats_id')){
            $elektronik->whereHas('elektronik_cats', function ($query) use ($request){
                $query->where('id', $request->input('elektronik_cats_id'));
            });
        }

        if ($request->has('min_price')){
            $elektronik->whereBetween('price', [$request->input('min_price'), 999999999]);
        }

        if ($request->has('min_price') && $request->has('max_price')){
            $elektronik->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        if ($request->has('max_price')){
            $elektronik->whereBetween('price', [0, $request->input('max_price')]);
        }

        if ($request->has('country_id')){
            $elektronik->whereHas('country', function ($query) use ($request){
                $query->where('id', $request->input('country_id'));
            });
        }
        $get_elektronik = $elektronik->orderBy('updated_at', 'desc')->paginate(8);

        return view('elektronike.kerko', compact('get_elektronik', 'countries', 'categories',
            'menu'));

    }
}
