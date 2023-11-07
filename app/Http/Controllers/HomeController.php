<?php

namespace App\Http\Controllers;

use App\Models\Galle;
use App\Models\Kandy;
use App\Models\Ampara;
use App\Models\Jaffna;
use App\Models\Mannar;
use App\Models\Matale;
use App\Models\Matara;
use App\Models\Badulla;
use App\Models\Colombo;
use App\Models\Gampaha;
use App\Models\Kegalle;
use App\Models\Mulativu;
use App\Models\Puttalam;
use App\Models\Vavuniya;
use App\Models\Kaluthara;
use App\Models\Ratnapura;
use App\Models\Batticaloa;
use App\Models\Hambantota;
use App\Models\Kurunagala;
use App\Models\Monaragala;
use App\Models\Kilinochchi;
use App\Models\NuwaraEliya;
use App\Models\Polonnaruwa;
use App\Models\Trincomalee;
use App\Models\Anuradhapura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(Request $request){
        $labels=["Business Enviroment","Digital Adoption","Technology Infrastructure","Capacity Growth","Socio Economic"];
        $businessEnviroment1=Colombo::pluck('business_enviroment2')->all();
        $digitalAdoption1=Colombo::pluck('digital_adoption2')->all();
        $technologyInfrastructure1=Colombo::pluck('technology_infrastructure2')->all();
        $capacityGrowth1=Colombo::pluck('capacity_growth2')->all();
        $socioEconomic1=Colombo::pluck('socio_economic2')->all();        
            
        $colombo  = [
                    32.39, //businessEnviroment
                    $digitalAdoption1,
                    $technologyInfrastructure1,
                    $capacityGrowth1,
                    $socioEconomic1,
                ];
        $businessEnviroment2=Gampaha::pluck('business_enviroment2')->all();
        $digitalAdoption2=Gampaha::pluck('digital_adoption2')->all();
        $technologyInfrastructure2=Gampaha::pluck('technology_infrastructure2')->all();
        $capacityGrowth2=Gampaha::pluck('capacity_growth2')->all();
        $socioEconomic2=Gampaha::pluck('socio_economic2')->all();        
            
        $gampaha = [
                    17.69, //businessEnviroment
                    $digitalAdoption2,
                    $technologyInfrastructure2,
                    $capacityGrowth2,
                    $socioEconomic2,
                ];
        $businessEnviroment3=Kurunagala::pluck('business_enviroment2')->all();
        $digitalAdoption3=Kurunagala::pluck('digital_adoption2')->all();
        $technologyInfrastructure3=Kurunagala::pluck('technology_infrastructure2')->all();
        $capacityGrowth3=Kurunagala::pluck('capacity_growth2')->all();
        $socioEconomic3=Kurunagala::pluck('socio_economic2')->all();        
            
        $kurunegala = [
                    15.98, //businessEnviroment
                    $digitalAdoption3,
                    $technologyInfrastructure3,
                    $capacityGrowth3,
                    $socioEconomic3,
                ];
        $businessEnviroment4=Kandy::pluck('business_enviroment2')->all();
        $digitalAdoption4=Kandy::pluck('digital_adoption2')->all();
        $technologyInfrastructure4=Kandy::pluck('technology_infrastructure2')->all();
        $capacityGrowth4=Kandy::pluck('capacity_growth2')->all();
        $socioEconomic4=Kandy::pluck('socio_economic2')->all();        
            
        $kandy = [
                    18.11, //businessEnviroment
                    $digitalAdoption4,
                    $technologyInfrastructure4,
                    $capacityGrowth4,
                    $socioEconomic4,
                ];
        $businessEnviroment5=Galle ::pluck('business_enviroment2')->all();
        $digitalAdoption5=Galle ::pluck('digital_adoption2')->all();
        $technologyInfrastructure5=Galle ::pluck('technology_infrastructure2')->all();
        $capacityGrowth5=Galle ::pluck('capacity_growth2')->all();
        $socioEconomic5=Galle ::pluck('socio_economic2')->all();        
            
        $galle  = [
                    17.36, //businessEnviroment
                    $digitalAdoption5,
                    $technologyInfrastructure5,
                    $capacityGrowth5,
                    $socioEconomic5,
                ];
        $businessEnviroment6=Kaluthara::pluck('business_enviroment2')->all();
        $digitalAdoption6=Kaluthara::pluck('digital_adoption2')->all();
        $technologyInfrastructure6=Kaluthara::pluck('technology_infrastructure2')->all();
        $capacityGrowth6=Kaluthara::pluck('capacity_growth2')->all();
        $socioEconomic6=Kaluthara::pluck('socio_economic2')->all();        
            
        $kaluthara   = [
                    17.21, //businessEnviroment
                    $digitalAdoption6,
                    $technologyInfrastructure6,
                    $capacityGrowth6,
                    $socioEconomic6,
                ];
        $businessEnviroment7=Matara::pluck('business_enviroment2')->all();
        $digitalAdoption7=Matara::pluck('digital_adoption2')->all();
        $technologyInfrastructure7=Matara::pluck('technology_infrastructure2')->all();
        $capacityGrowth7=Matara::pluck('capacity_growth2')->all();
        $socioEconomic7=Matara::pluck('socio_economic2')->all();        
            
        $matara   = [
                    16.58, //businessEnviroment
                    $digitalAdoption7,
                    $technologyInfrastructure7,
                    $capacityGrowth7,
                    $socioEconomic7,
                ];
        $businessEnviroment8=Ratnapura::pluck('business_enviroment2')->all();
        $digitalAdoption8=Ratnapura::pluck('digital_adoption2')->all();
        $technologyInfrastructure8=Ratnapura::pluck('technology_infrastructure2')->all();
        $capacityGrowth8=Ratnapura::pluck('capacity_growth2')->all();
        $socioEconomic8=Ratnapura::pluck('socio_economic2')->all();        
            
        $ratnapura   = [
                    23.60, //businessEnviroment
                    $digitalAdoption8,
                    $technologyInfrastructure8,
                    $capacityGrowth8,
                    $socioEconomic8,
                ];
        $businessEnviroment9=Jaffna::pluck('business_enviroment2')->all();
        $digitalAdoption9=Jaffna::pluck('digital_adoption2')->all();
        $technologyInfrastructure9=Jaffna::pluck('technology_infrastructure2')->all();
        $capacityGrowth9=Jaffna::pluck('capacity_growth2')->all();
        $socioEconomic9=Jaffna::pluck('socio_economic2')->all();        
            
        $jaffna   = [
                    27.79, //businessEnviroment
                    $digitalAdoption9,
                    $technologyInfrastructure9,
                    $capacityGrowth9,
                    $socioEconomic9,
                ];
        $businessEnviroment10=Kegalle::pluck('business_enviroment2')->all();
        $digitalAdoption10=Kegalle::pluck('digital_adoption2')->all();
        $technologyInfrastructure10=Kegalle::pluck('technology_infrastructure2')->all();
        $capacityGrowth10=Kegalle::pluck('capacity_growth2')->all();
        $socioEconomic10=Kegalle::pluck('socio_economic2')->all();        
            
        $kegalle   = [
                    18.10, //businessEnviroment
                    $digitalAdoption10,
                    $technologyInfrastructure10,
                    $capacityGrowth10,
                    $socioEconomic10,
                ];
        $businessEnviroment11=Puttalam::pluck('business_enviroment2')->all();
        $digitalAdoption11=Puttalam::pluck('digital_adoption2')->all();
        $technologyInfrastructure11=Puttalam::pluck('technology_infrastructure2')->all();
        $capacityGrowth11=Puttalam::pluck('capacity_growth2')->all();
        $socioEconomic11=Puttalam::pluck('socio_economic2')->all();        
            
        $puttalam   = [
                    26.36, //businessEnviroment
                    $digitalAdoption11,
                    $technologyInfrastructure11,
                    $capacityGrowth11,
                    $socioEconomic11,
                ];
        $businessEnviroment12=Badulla::pluck('business_enviroment2')->all();
        $digitalAdoption12=Badulla::pluck('digital_adoption2')->all();
        $technologyInfrastructure12=Badulla::pluck('technology_infrastructure2')->all();
        $capacityGrowth12=Badulla::pluck('capacity_growth2')->all();
        $socioEconomic12=Badulla::pluck('socio_economic2')->all();        
            
        $badulla   = [
                    24.25, //businessEnviroment
                    $digitalAdoption12,
                    $technologyInfrastructure12,
                    $capacityGrowth12,
                    $socioEconomic12,
                ];
        $businessEnviroment13=Anuradhapura::pluck('business_enviroment2')->all();
        $digitalAdoption13=Anuradhapura::pluck('digital_adoption2')->all();
        $technologyInfrastructure13=Anuradhapura::pluck('technology_infrastructure2')->all();
        $capacityGrowth13=Anuradhapura::pluck('capacity_growth2')->all();
        $socioEconomic13=Anuradhapura::pluck('socio_economic2')->all();        
            
        $anuradhapura   = [
                    21.32, //businessEnviroment
                    $digitalAdoption13,
                    $technologyInfrastructure13,
                    $capacityGrowth13,
                    $socioEconomic13,
                ];
        $businessEnviroment14=Hambantota::pluck('business_enviroment2')->all();
        $digitalAdoption14=Hambantota::pluck('digital_adoption2')->all();
        $technologyInfrastructure14=Hambantota::pluck('technology_infrastructure2')->all();
        $capacityGrowth14=Hambantota::pluck('capacity_growth2')->all();
        $socioEconomic14=Hambantota::pluck('socio_economic2')->all();        
            
        $hambantota   = [
                    22.66, //businessEnviroment
                    $digitalAdoption14,
                    $technologyInfrastructure14,
                    $capacityGrowth14,
                    $socioEconomic14,
                ];
        $businessEnviroment15=Matale::pluck('business_enviroment2')->all();
        $digitalAdoption15=Matale::pluck('digital_adoption2')->all();
        $technologyInfrastructure15=Matale::pluck('technology_infrastructure2')->all();
        $capacityGrowth15=Matale::pluck('capacity_growth2')->all();
        $socioEconomic15=Matale::pluck('socio_economic2')->all();        
            
        $matale   = [
                    22.22, //businessEnviroment
                    $digitalAdoption15,
                    $technologyInfrastructure15,
                    $capacityGrowth15,
                    $socioEconomic15,
                ];
        $businessEnviroment16=Ampara::pluck('business_enviroment2')->all();
        $digitalAdoption16=Ampara::pluck('digital_adoption2')->all();
        $technologyInfrastructure16=Ampara::pluck('technology_infrastructure2')->all();
        $capacityGrowth16=Ampara::pluck('capacity_growth2')->all();
        $socioEconomic16=Ampara::pluck('socio_economic2')->all();        
            
        $ampara   = [
                    20.90, //businessEnviroment
                    $digitalAdoption16,
                    $technologyInfrastructure16,
                    $capacityGrowth16,
                    $socioEconomic16,
                ];
        $businessEnviroment17=Batticaloa::pluck('business_enviroment2')->all();
        $digitalAdoption17=Batticaloa::pluck('digital_adoption2')->all();
        $technologyInfrastructure17=Batticaloa::pluck('technology_infrastructure2')->all();
        $capacityGrowth17=Batticaloa::pluck('capacity_growth2')->all();
        $socioEconomic17=Batticaloa::pluck('socio_economic2')->all();        
            
        $batticaloa   = [
                    22.68, //businessEnviroment
                    $digitalAdoption17,
                    $technologyInfrastructure17,
                    $capacityGrowth17,
                    $socioEconomic17,
                ];
        $businessEnviroment18=NuwaraEliya::pluck('business_enviroment2')->all();
        $digitalAdoption18=NuwaraEliya::pluck('digital_adoption2')->all();
        $technologyInfrastructure18=NuwaraEliya::pluck('technology_infrastructure2')->all();
        $capacityGrowth18=NuwaraEliya::pluck('capacity_growth2')->all();
        $socioEconomic18=NuwaraEliya::pluck('socio_economic2')->all();        
            
        $nuwaraeliya   = [
                    8.20, //businessEnviroment
                    $digitalAdoption18,
                    $technologyInfrastructure18,
                    $capacityGrowth18,
                    $socioEconomic18,
                ];
        $businessEnviroment19=Trincomalee::pluck('business_enviroment2')->all();
        $digitalAdoption19=Trincomalee::pluck('digital_adoption2')->all();
        $technologyInfrastructure19=Trincomalee::pluck('technology_infrastructure2')->all();
        $capacityGrowth19=Trincomalee::pluck('capacity_growth2')->all();
        $socioEconomic19=Trincomalee::pluck('socio_economic2')->all();        
            
        $trincomalee   = [
                    21.12, //businessEnviroment
                    $digitalAdoption19,
                    $technologyInfrastructure19,
                    $capacityGrowth19,
                    $socioEconomic19,
                ];
        $businessEnviroment20=Mulativu::pluck('business_enviroment2')->all();
        $digitalAdoption20=Mulativu::pluck('digital_adoption2')->all();
        $technologyInfrastructure20=Mulativu::pluck('technology_infrastructure2')->all();
        $capacityGrowth20=Mulativu::pluck('capacity_growth2')->all();
        $socioEconomic20=Mulativu::pluck('socio_economic2')->all();        
            
        $mulativu   = [
                    21.98, //businessEnviroment
                    $digitalAdoption20,
                    $technologyInfrastructure20,
                    $capacityGrowth20,
                    $socioEconomic20,
                ];
        $businessEnviroment21=Polonnaruwa::pluck('business_enviroment2')->all();
        $digitalAdoption21=Polonnaruwa::pluck('digital_adoption2')->all();
        $technologyInfrastructure21=Polonnaruwa::pluck('technology_infrastructure2')->all();
        $capacityGrowth21=Polonnaruwa::pluck('capacity_growth2')->all();
        $socioEconomic21=Polonnaruwa::pluck('socio_economic2')->all();        
            
        $polonnaruwa    = [
                    21.12, //businessEnviroment
                    $digitalAdoption21,
                    $technologyInfrastructure21,
                    $capacityGrowth21,
                    $socioEconomic21,
                ];
        $businessEnviroment22=Vavuniya::pluck('business_enviroment2')->all();
        $digitalAdoption22=Vavuniya::pluck('digital_adoption2')->all();
        $technologyInfrastructure22=Vavuniya::pluck('technology_infrastructure2')->all();
        $capacityGrowth22=Vavuniya::pluck('capacity_growth2')->all();
        $socioEconomic22=Vavuniya::pluck('socio_economic2')->all();        
            
        $vavuniya    = [
                    25.44, //businessEnviroment
                    $digitalAdoption22,
                    $technologyInfrastructure22,
                    $capacityGrowth22,
                    $socioEconomic22,
                ];
        $businessEnviroment23=Monaragala::pluck('business_enviroment2')->all();
        $digitalAdoption23=Monaragala::pluck('digital_adoption2')->all();
        $technologyInfrastructure23=Monaragala::pluck('technology_infrastructure2')->all();
        $capacityGrowth23=Monaragala::pluck('capacity_growth2')->all();
        $socioEconomic23=Monaragala::pluck('socio_economic2')->all();        
            
        $monaragala    = [
                    19.05, //businessEnviroment
                    $digitalAdoption23,
                    $technologyInfrastructure23,
                    $capacityGrowth23,
                    $socioEconomic23,
                ];
        $businessEnviroment24=Kilinochchi::pluck('business_enviroment2')->all();
        $digitalAdoption24=Kilinochchi::pluck('digital_adoption2')->all();
        $technologyInfrastructure24=Kilinochchi::pluck('technology_infrastructure2')->all();
        $capacityGrowth24=Kilinochchi::pluck('capacity_growth2')->all();
        $socioEconomic24=Kilinochchi::pluck('socio_economic2')->all();        
            
        $kilinochchi    = [
                    30.56, //businessEnviroment
                    $digitalAdoption24,
                    $technologyInfrastructure24,
                    $capacityGrowth24,
                    $socioEconomic24,
                ];
        $businessEnviroment25=Mannar::pluck('business_enviroment2')->all();
        $digitalAdoption25=Mannar::pluck('digital_adoption2')->all();
        $technologyInfrastructure25=Mannar::pluck('technology_infrastructure2')->all();
        $capacityGrowth25=Mannar::pluck('capacity_growth2')->all();
        $socioEconomic25=Mannar::pluck('socio_economic2')->all();        
            
        $mannar    = [
                    14.05, //businessEnviroment
                    $digitalAdoption25,
                    $technologyInfrastructure25,
                    $capacityGrowth25,
                    $socioEconomic25,
                ];

        $select=$request->districtSelect;
        return view('home',compact('select','labels','mannar','kilinochchi','monaragala','vavuniya','polonnaruwa','mulativu','trincomalee','nuwaraeliya','batticaloa','matale','hambantota','anuradhapura','badulla','puttalam','ampara','colombo','gampaha','kurunegala','kandy','galle','kaluthara','matara','ratnapura','jaffna','kegalle'));
    }

    public function comparison(Request $request){
        $district1 = $request->districtSelect1;
        return view('comparison',compact('district1'));
    }

    public function compare(Request $request){
        $district1 = $request->districtSelect1;
        $district2 = $request->districtSelect2;
        $labels=["Business Enviroment","Digital Adoption","Technology Infrastructure","Capacity Growth","Socio Economic"];

        if ($district1 === "Ampara") {
            $firstdistricts = Ampara::all();
            $businessEnviroment1 = $firstdistricts->pluck('business_enviroment2')->first();
            $digitalAdoption1 = $firstdistricts->pluck('digital_adoption2')->first();
            $technologyInfrastructure1 = $firstdistricts->pluck('technology_infrastructure2')->first();
            $capacityGrowth1 = $firstdistricts->pluck('capacity_growth2')->first();
            $socioEconomic1 = $firstdistricts->pluck('socio_economic2')->first();
        } elseif ($district1 === "Anuradhapura") {
            $firstdistricts = Anuradhapura::all();
            $businessEnviroment1 = $firstdistricts->pluck('business_enviroment2')->first();
            $digitalAdoption1 = $firstdistricts->pluck('digital_adoption2')->first();
            $technologyInfrastructure1 = $firstdistricts->pluck('technology_infrastructure2')->first();
            $capacityGrowth1 = $firstdistricts->pluck('capacity_growth2')->first();
            $socioEconomic1 = $firstdistricts->pluck('socio_economic2')->first();
        } else {
            $firstdistricts = [];
        }

        if ($district2 === "Ampara") {
            $seconddistricts = Ampara::all();
            $businessEnviroment2 = $seconddistricts->pluck('business_enviroment2')->first();
            $digitalAdoption2 = $seconddistricts->pluck('digital_adoption2')->first();
            $technologyInfrastructure2 = $seconddistricts->pluck('technology_infrastructure2')->first();
            $capacityGrowth2 = $seconddistricts->pluck('capacity_growth2')->first();
            $socioEconomic2 = $seconddistricts->pluck('socio_economic2')->first();
        } elseif ($district2 === "Anuradhapura") {
            $seconddistricts = Anuradhapura::all();
            $businessEnviroment2 = $seconddistricts->pluck('business_enviroment2')->first();
            $digitalAdoption2 = $seconddistricts->pluck('digital_adoption2')->first();
            $technologyInfrastructure2 = $seconddistricts->pluck('technology_infrastructure2')->first();
            $capacityGrowth2 = $seconddistricts->pluck('capacity_growth2')->first();
            $socioEconomic2 = $seconddistricts->pluck('socio_economic2')->first();
        } else {
            $seconddistricts = [];
        }

        $districtdata1   = [
            $businessEnviroment1,
            $digitalAdoption1,
            $technologyInfrastructure1,
            $capacityGrowth1,
            $socioEconomic1,
        ];

        $districtdata2   = [
            $businessEnviroment2,
            $digitalAdoption2,
            $technologyInfrastructure2,
            $capacityGrowth2,
            $socioEconomic2,
        ];

        return view('comparison',compact('firstdistricts','district1','seconddistricts','district2','labels','districtdata1','districtdata2'));
    }
}
