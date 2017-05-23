<?php
/**
 * Created by PhpStorm.
 * User: tonyx
 * Date: 5/6/2017
 * Time: 3:21 AM
 */

namespace App\Http\Utilities;


use App\Argetim;
use App\ArgetimCat;
use App\CarMake;
use App\Competition;
use App\Elektronik;
use App\ElektronikCat;
use App\Femra;
use App\FemraCat;
use App\Kuzhina;
use App\KuzhinaCat;
use App\Lajme;
use App\LajmeCat;
use App\Magazina;
use App\MagazinaCat;
use App\Makina;
use App\Profesioni;
use App\Prona;
use App\PronaCat;
use App\Puna;
use App\Shitje;
use App\ShitjeCat;
use App\Sport;
use App\Tech;
use App\TechCat;

class Menu
{
    public function argetim_menu_cat()
    {
        $argetim_menu = ArgetimCat::orderBy('id')->get();
        return $argetim_menu;
    }

    public function argetim_menu()
    {
        $argetim_menu = Argetim::orderBy('updated_at', 'desc')->take(3)->get();
        return $argetim_menu;

    }

    public function competition_menu_one()
    {
        $competition_menu_one = Competition::orderBy('id')->take(7)->get();
      return $competition_menu_one;
     }

    public function sport_menu()
    {
        $sport_menu = Sport::orderBy('updated_at', 'desc')->take(3)->get();
        return $sport_menu;

     }

    public function lajme_menu_cat()
    {
        $lajme_menu = LajmeCat::orderBy('id')->get();

        return $lajme_menu;
     }

    public function lajme_menu()
    {
        $lajme_menu = Lajme::orderBy('updated_at', 'desc')->take(3)->get();
        return $lajme_menu;
     }

    public function magazina_menu_cat()
    {
        $magazina_menu = MagazinaCat::orderBy('id')->get();

        return $magazina_menu;
     }

    public function magazina_menu()
    {
        $magazina_mmenu = Magazina::orderBy('updated_at', 'desc')->take(3)->get();
        return $magazina_mmenu;
     }

    public function femrat_menu_cat()
    {
        $femrat_menu = FemraCat::orderBy('id')->get();

        return $femrat_menu;
     }

    public function femrat_menu()
    {
        $femrat_menu = Femra::orderBy('updated_at', 'desc')->take(3)->get();
        return $femrat_menu;
     }

    public function tech_menu_cat()
    {
        $tech_menu = TechCat::orderBy('id')->get();

        return $tech_menu;
     }

    public function tech_menu()
    {
        $tech_menu = Tech::orderBy('updated_at', 'desc')->take(3)->get();
        return $tech_menu;
     }


    public function kuzhina_menu_cat()
    {
        $kuzhina_menu = KuzhinaCat::orderBy('id')->get();
    return $kuzhina_menu;
    }

    public function kuzhina_menu()
    {
        $kuzhina_menu = Kuzhina::orderBy('updated_at', 'desc')->take(3)->get();
        return $kuzhina_menu;
    }

    public function makina_menu_cat()
    {
        $makina_menu = CarMake::orderBy('id')->get();

        return $makina_menu;

    }

    public function makina_menu()
    {
        $makina_menu = Makina::orderBy('updated_at', 'desc')->take(3)->get();
        return $makina_menu;
    }


    public function prona_menu_cat()
    {
        $prona_menu = PronaCat::all();

        return $prona_menu;

    }

    public function prona_menu()
    {
        $prona_menu = Prona::orderBy('updated_at', 'desc')->take(3)->get();
        return $prona_menu;
    }

    public function puna_menu_cat()
    {
        $puna_menu = Profesioni::all();

        return $puna_menu;
    }

    public function puna_menu()
    {
        $puna_menu = Puna::orderBy('updated_at', 'desc')->take(3)->get();
        return $puna_menu;
    }

    public function elektronike_menu_cat()
    {
        $elektronike_menu = ElektronikCat::all();

        return $elektronike_menu;

    }

    public function elekronike_menu()
    {
        $elektronike_menu = Elektronik::orderBy('updated_at', 'desc')->take(3)->get();
        return $elektronike_menu;
    }

    public function shitjet_menu_cat()
    {
        $shitjet_menu = ShitjeCat::all();
        return $shitjet_menu;
    }

    public function shitjet_menu()
    {
        $shitjet_menu = Shitje::orderBy('updated_at', 'desc')->take(3)->get();
        return $shitjet_menu;
    }
}