<?php

namespace App\Http\Controllers;

use App\Argetim;
use App\ArgetimCat;
use App\CarMake;
use App\Competition;
use App\ElektronikCat;
use App\Femra;
use App\FemraCat;
use App\Http\Utilities\Menu;
use App\Kuzhina;
use App\Lajme;
use App\LajmeCat;
use App\Magazina;
use App\MagazinaCat;
use App\Makina;
use App\Profesioni;
use App\PronaCat;
use App\ShitjeCat;
use App\Sport;
use App\Tech;
use App\TechCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowEightController extends Controller
{

    public function index(Menu $menu)
    {

        $lajme_kater_1 = Lajme::orderBy('updated_at', 'desc')->take(4)->get();
        $lajme_kater_2 = Lajme::orderBy('updated_at', 'desc')->skip(4)->take(4)->get();
        $lajmi_i_par = Lajme::where('lajme_cats_id', 1)->orderBy('updated_at', 'desc')->take(1)->get();
        $argetim_cat = ArgetimCat::all();
        $magazina_cat = MagazinaCat::all();
        $magazina_show = DB::table('magazinas')->orderBy('updated_at', 'desc')->get();
        $competition = Competition::all();
        $femra_cat = FemraCat::all();
        $elektronik_cat = ElektronikCat::all();
        $shitje_cat = ShitjeCat::all();
        $tech_cat = TechCat::all();
        $carmake = CarMake::all();
        $prona_cat = PronaCat::all();
        $profesioni = Profesioni::all();

     return view('welcome', compact('lajme_kater_1', 'lajme_kater_2', 'lajmi_i_par', 'menu', 'lajme_cat',
         'argetim_cat', 'magazina_cat', 'competition', 'femra_cat', 'elektronik_cat', 'shitje_cat', 'tech_cat', 'carmake', 'profesioni',
         'prona_cat', 'magazina_show'));
    }

}
