<?php

namespace App\Http\Controllers;

use App\Models\Ampara;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $businessEnviroment=Ampara::pluck('business_enviroment2')->all();
        $digitalAdoption=Ampara::pluck('digital_adoption2')->all();
        $technologyInfrastructure=Ampara::pluck('technology_infrastructure2')->all();
        $capacityGrowth=Ampara::pluck('capacity_growth2')->all();
        $socioEconomic=Ampara::pluck('socio_economic2')->all();

        $labels=["Business Enviroment","Digital Adoption","Technology Infrastructure","Capacity Growth","Socio Economic"];

        $ampara = [
             20.90, //businessEnviroment
             $digitalAdoption,
             $technologyInfrastructure,
             $capacityGrowth,
             $socioEconomic,
        ];
        return view('home',compact('labels','ampara'));
    }
}
