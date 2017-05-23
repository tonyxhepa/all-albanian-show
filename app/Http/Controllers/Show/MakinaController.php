<?php

namespace App\Http\Controllers\Show;

use App\Argetim;
use App\CarMake;
use App\CarModel;
use App\Country;
use App\Femra;
use App\Kuzhina;
use App\Lajme;
use App\Magazina;
use App\Makina;
use App\Sport;
use App\Tech;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MakinaController extends Controller
{
    //
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


        $car_make = CarMake::pluck('name', 'id')->all();
        $car_model = CarModel::pluck('name', 'id')->all();
        $cars = Makina::orderBy('updated_at', 'desk')->get();
        $countries = Country::pluck('name', 'id')->all();

        return view('makina.index', compact('car_model', 'car_make', 'cars', 'countries',
            'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
            'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));
    }

    public function show($slug)
    {
        $shiko_makinen = Makina::where('slug',$slug)->first();
        $modeli = $shiko_makinen->car_make;
        $mnm = Makina::where('car_make_id', $modeli->id)->where('id', '!=', $shiko_makinen->id)->orderBy('created_at', 'desk')->take(8)->get();

        return view('makina.show', compact('shiko_makinen', 'mnm'));
    }

    public function search(Request $request, Makina $makina)
     {
         $makina_menu = Makina::orderBy('updated_at', 'desk')->take(3)->get();
         $lajme_menu = Lajme::orderBy('updated_at', 'desk')->take(3)->get();
         $argetim_menu = Argetim::orderBy('updated_at', 'desk')->take(3)->get();
         $magazina_menu = Magazina::orderBy('updated_at', 'desk')->take(3)->get();
         $femrat_menu = Femra::orderBy('updated_at', 'desk')->take(3)->get();
         $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desk')->take(3)->get();
         $tech_menu = Tech::orderBy('updated_at', 'desk')->take(3)->get();
         $sport_menu = Sport::orderBy('updated_at', 'desk')->take(3)->get();

         $makina = $makina->newQuery();

         if ($request->has('title')){
             $makina->where('title', 'like' ,"%{$request->input('title')}%");
         }

         if ($request->has('karburanti')){
             $makina->where('karburanti', $request->input('karburanti'));
         }

         if ($request->has('min_price')){
             $makina->whereBetween('price', [$request->input('min_price'), 999999999]);
         }

         if ($request->has('min_price') && $request->has('max_price')){
             $makina->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
         }

         if ($request->has('max_price')){
             $makina->whereBetween('price', [0, $request->input('max_price')]);
         }


         if ($request->has('car_make_id')){
             $makina->whereHas('car_make', function ($query) use ($request){
                 $query->where('id', $request->input('car_make_id'));
             });
         }

         if ($request->has('country_id')){
             $makina->whereHas('country', function ($query) use ($request){
                 $query->where('id', $request->input('country_id'));
             });
         }
          $get_makina = $makina->orderBy('updated_at', 'desc')->paginate(8);

         $car_make = CarMake::pluck('name', 'id')->all();
         $countries = Country::pluck('name', 'id')->all();

         return view('makina.kerko', compact('get_makina', 'car_make', 'makinat','countries',
             'makina_menu', 'lajme_menu', 'argetim_menu', 'makina_menu', 'magazina_menu',
             'femrat_menu', 'kuzhina_menu', 'tech_menu', 'sport_menu'));

     }
}
