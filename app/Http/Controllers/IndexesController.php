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

class IndexesController extends Controller
{
    public function BusinessEnviroment(){
        $ampara=Ampara::pluck('business_environment')->all();
        $anuradhapura=Anuradhapura::pluck('business_environment')->all();
        $badulla=Badulla::pluck('business_environment')->all();
        $batticaloa=Batticaloa::pluck('business_environment')->all();
        $colombo=Colombo::pluck('business_environment')->all();
        $galle=Galle::pluck('business_environment')->all();
        $gampaha=Gampaha::pluck('business_environment')->all();
        $hambantota=Hambantota::pluck('business_environment')->all();
        $jaffna=Jaffna::pluck('business_environment')->all();
        $kaluthara=Kaluthara::pluck('business_environment')->all();
        $kandy=Kandy::pluck('business_environment')->all();
        $kegalle=Kegalle::pluck('business_environment')->all();
        $kilinochchi=Kilinochchi::pluck('business_environment')->all();
        $kurunagala=Kurunagala::pluck('business_environment')->all();
        $mannar=Mannar::pluck('business_environment')->all();
        $matale=Matale::pluck('business_environment')->all();
        $matara=Matara::pluck('business_environment')->all();
        $monaragala=Monaragala::pluck('business_environment')->all();
        $mulativu=Mulativu::pluck('business_environment')->all();
        $nuwaraeliya=NuwaraEliya::pluck('business_environment')->all();
        $polonnaruwa=Polonnaruwa::pluck('business_environment')->all();
        $puttalama=Puttalam::pluck('business_environment')->all();
        $ratnapura=Ratnapura::pluck('business_environment')->all();
        $trincomalee=Trincomalee::pluck('business_environment')->all();
        $vavuniya=Vavuniya::pluck('business_environment')->all();

        $businessenviroment = [
            ['Category', 'Value'],
            ['Ampara', 3.53], //ampara
            ['Anuradhapura', $anuradhapura],
            ['Badulla', $badulla],
            ['Batticaloa', $batticaloa],
            ['Colombo', $colombo],
            ['Galle', $galle],
            ['Gampaha', $gampaha],
            ['Hambantota', $hambantota],
            ['Jaffna', $jaffna],
            ['Kaluthara', $kaluthara],
            ['Kandy', $kandy],
            ['Kegalle', $kegalle],
            ['Kilinochchi', $kilinochchi],
            ['Kurunegala', $kurunagala],
            ['Mannar', $mannar],
            ['Matale', $matale],
            ['Matara', $matara],
            ['Monaragala', $monaragala],
            ['Mulativu', $mulativu],
            ['Nuwaraeliya', $nuwaraeliya],
            ['Polonnaruwa', $polonnaruwa],
            ['Puttalama', $puttalama],
            ['Ratnapura', $ratnapura],
            ['Trincomalee', $trincomalee],
            ['Vavuniya', $vavuniya],
        ];
        // dd($businessenviroment);
        return view ('MainIndexes.BusinessEnviroment',compact('businessenviroment'));
    }

    public function TechnologyInfrastructure(){
        $ampara=Ampara::pluck('technology_infrastructure')->all();
        $anuradhapura=Anuradhapura::pluck('technology_infrastructure')->all();
        $badulla=Badulla::pluck('technology_infrastructure')->all();
        $batticaloa=Batticaloa::pluck('technology_infrastructure')->all();
        $colombo=Colombo::pluck('technology_infrastructure')->all();
        $galle=Galle::pluck('technology_infrastructure')->all();
        $gampaha=Gampaha::pluck('technology_infrastructure')->all();
        $hambantota=Hambantota::pluck('technology_infrastructure')->all();
        $jaffna=Jaffna::pluck('technology_infrastructure')->all();
        $kaluthara=Kaluthara::pluck('technology_infrastructure')->all();
        $kandy=Kandy::pluck('technology_infrastructure')->all();
        $kegalle=Kegalle::pluck('technology_infrastructure')->all();
        $kilinochchi=Kilinochchi::pluck('technology_infrastructure')->all();
        $kurunagala=Kurunagala::pluck('technology_infrastructure')->all();
        $mannar=Mannar::pluck('technology_infrastructure')->all();
        $matale=Matale::pluck('technology_infrastructure')->all();
        $matara=Matara::pluck('technology_infrastructure')->all();
        $monaragala=Monaragala::pluck('technology_infrastructure')->all();
        $mulativu=Mulativu::pluck('technology_infrastructure')->all();
        $nuwaraeliya=NuwaraEliya::pluck('technology_infrastructure')->all();
        $polonnaruwa=Polonnaruwa::pluck('technology_infrastructure')->all();
        $puttalama=Puttalam::pluck('technology_infrastructure')->all();
        $ratnapura=Ratnapura::pluck('technology_infrastructure')->all();
        $trincomalee=Trincomalee::pluck('technology_infrastructure')->all();
        $vavuniya=Vavuniya::pluck('technology_infrastructure')->all();

        $technologyinfrastructure = [
            ['Category', 'Value'],
            ['Ampara', 2.91], //ampara
            ['Anuradhapura', $anuradhapura],
            ['Badulla', $badulla],
            ['Batticaloa', $batticaloa],
            ['Colombo', $colombo],
            ['Galle', $galle],
            ['Gampaha', $gampaha],
            ['Hambantota', $hambantota],
            ['Jaffna', $jaffna],
            ['Kaluthara', $kaluthara],
            ['Kandy', $kandy],
            ['Kegalle', $kegalle],
            ['Kilinochchi', $kilinochchi],
            ['Kurunegala', $kurunagala],
            ['Mannar', $mannar],
            ['Matale', $matale],
            ['Matara', $matara],
            ['Monaragala', $monaragala],
            ['Mulativu', $mulativu],
            ['Nuwaraeliya', $nuwaraeliya],
            ['Polonnaruwa', $polonnaruwa],
            ['Puttalama', $puttalama],
            ['Ratnapura', $ratnapura],
            ['Trincomalee', $trincomalee],
            ['Vavuniya', $vavuniya],
        ];

        return view ('MainIndexes.TechnologyInfrastructure',compact('technologyinfrastructure'));
    }

    public function SocioEconomic(){
        $ampara=Ampara::pluck('socio_economic')->all();
        $anuradhapura=Anuradhapura::pluck('socio_economic')->all();
        $badulla=Badulla::pluck('socio_economic')->all();
        $batticaloa=Batticaloa::pluck('socio_economic')->all();
        $colombo=Colombo::pluck('socio_economic')->all();
        $galle=Galle::pluck('socio_economic')->all();
        $gampaha=Gampaha::pluck('socio_economic')->all();
        $hambantota=Hambantota::pluck('socio_economic')->all();
        $jaffna=Jaffna::pluck('socio_economic')->all();
        $kaluthara=Kaluthara::pluck('socio_economic')->all();
        $kandy=Kandy::pluck('socio_economic')->all();
        $kegalle=Kegalle::pluck('socio_economic')->all();
        $kilinochchi=Kilinochchi::pluck('socio_economic')->all();
        $kurunagala=Kurunagala::pluck('socio_economic')->all();
        $mannar=Mannar::pluck('socio_economic')->all();
        $matale=Matale::pluck('socio_economic')->all();
        $matara=Matara::pluck('socio_economic')->all();
        $monaragala=Monaragala::pluck('socio_economic')->all();
        $mulativu=Mulativu::pluck('socio_economic')->all();
        $nuwaraeliya=NuwaraEliya::pluck('socio_economic')->all();
        $polonnaruwa=Polonnaruwa::pluck('socio_economic')->all();
        $puttalama=Puttalam::pluck('socio_economic')->all();
        $ratnapura=Ratnapura::pluck('socio_economic')->all();
        $trincomalee=Trincomalee::pluck('socio_economic')->all();
        $vavuniya=Vavuniya::pluck('socio_economic')->all();

        $socioeconomic = [
            ['Category', 'Value'],
            ['Ampara', 3.80], //ampara
            ['Anuradhapura', $anuradhapura],
            ['Badulla', $badulla],
            ['Batticaloa', $batticaloa],
            ['Colombo', $colombo],
            ['Galle', $galle],
            ['Gampaha', $gampaha],
            ['Hambantota', $hambantota],
            ['Jaffna', $jaffna],
            ['Kaluthara', $kaluthara],
            ['Kandy', $kandy],
            ['Kegalle', $kegalle],
            ['Kilinochchi', $kilinochchi],
            ['Kurunegala', $kurunagala],
            ['Mannar', $mannar],
            ['Matale', $matale],
            ['Matara', $matara],
            ['Monaragala', $monaragala],
            ['Mulativu', $mulativu],
            ['Nuwaraeliya', $nuwaraeliya],
            ['Polonnaruwa', $polonnaruwa],
            ['Puttalama', $puttalama],
            ['Ratnapura', $ratnapura],
            ['Trincomalee', $trincomalee],
            ['Vavuniya', $vavuniya],
        ];

        return view ('MainIndexes.SocioEconomic',compact('socioeconomic'));
    }

    public function CapacityGrowth(){
        $ampara=Ampara::pluck('capacity_growth')->all();
        $anuradhapura=Anuradhapura::pluck('capacity_growth')->all();
        $badulla=Badulla::pluck('capacity_growth')->all();
        $batticaloa=Batticaloa::pluck('capacity_growth')->all();
        $colombo=Colombo::pluck('capacity_growth')->all();
        $galle=Galle::pluck('capacity_growth')->all();
        $gampaha=Gampaha::pluck('capacity_growth')->all();
        $hambantota=Hambantota::pluck('capacity_growth')->all();
        $jaffna=Jaffna::pluck('capacity_growth')->all();
        $kaluthara=Kaluthara::pluck('capacity_growth')->all();
        $kandy=Kandy::pluck('capacity_growth')->all();
        $kegalle=Kegalle::pluck('capacity_growth')->all();
        $kilinochchi=Kilinochchi::pluck('capacity_growth')->all();
        $kurunagala=Kurunagala::pluck('capacity_growth')->all();
        $mannar=Mannar::pluck('capacity_growth')->all();
        $matale=Matale::pluck('capacity_growth')->all();
        $matara=Matara::pluck('capacity_growth')->all();
        $monaragala=Monaragala::pluck('capacity_growth')->all();
        $mulativu=Mulativu::pluck('capacity_growth')->all();
        $nuwaraeliya=NuwaraEliya::pluck('capacity_growth')->all();
        $polonnaruwa=Polonnaruwa::pluck('capacity_growth')->all();
        $puttalama=Puttalam::pluck('capacity_growth')->all();
        $ratnapura=Ratnapura::pluck('capacity_growth')->all();
        $trincomalee=Trincomalee::pluck('capacity_growth')->all();
        $vavuniya=Vavuniya::pluck('capacity_growth')->all();

        $capacitygrowth = [
            ['Category', 'Value'],
            ['Ampara', 3.76], //ampara
            ['Anuradhapura', $anuradhapura],
            ['Badulla', $badulla],
            ['Batticaloa', $batticaloa],
            ['Colombo', $colombo],
            ['Galle', $galle],
            ['Gampaha', $gampaha],
            ['Hambantota', $hambantota],
            ['Jaffna', $jaffna],
            ['Kaluthara', $kaluthara],
            ['Kandy', $kandy],
            ['Kegalle', $kegalle],
            ['Kilinochchi', $kilinochchi],
            ['Kurunegala', $kurunagala],
            ['Mannar', $mannar],
            ['Matale', $matale],
            ['Matara', $matara],
            ['Monaragala', $monaragala],
            ['Mulativu', $mulativu],
            ['Nuwaraeliya', $nuwaraeliya],
            ['Polonnaruwa', $polonnaruwa],
            ['Puttalama', $puttalama],
            ['Ratnapura', $ratnapura],
            ['Trincomalee', $trincomalee],
            ['Vavuniya', $vavuniya],
        ];

        return view ('MainIndexes.CapacityGrowth',compact('capacitygrowth'));
    }

    public function DigitalAdoption(){
        $ampara=Ampara::pluck('digital_adoption')->all();
        $anuradhapura=Anuradhapura::pluck('digital_adoption')->all();
        $badulla=Badulla::pluck('digital_adoption')->all();
        $batticaloa=Batticaloa::pluck('digital_adoption')->all();
        $colombo=Colombo::pluck('digital_adoption')->all();
        $galle=Galle::pluck('digital_adoption')->all();
        $gampaha=Gampaha::pluck('digital_adoption')->all();
        $hambantota=Hambantota::pluck('digital_adoption')->all();
        $jaffna=Jaffna::pluck('digital_adoption')->all();
        $kaluthara=Kaluthara::pluck('digital_adoption')->all();
        $kandy=Kandy::pluck('digital_adoption')->all();
        $kegalle=Kegalle::pluck('digital_adoption')->all();
        $kilinochchi=Kilinochchi::pluck('digital_adoption')->all();
        $kurunagala=Kurunagala::pluck('digital_adoption')->all();
        $mannar=Mannar::pluck('digital_adoption')->all();
        $matale=Matale::pluck('digital_adoption')->all();
        $matara=Matara::pluck('digital_adoption')->all();
        $monaragala=Monaragala::pluck('digital_adoption')->all();
        $mulativu=Mulativu::pluck('digital_adoption')->all();
        $nuwaraeliya=NuwaraEliya::pluck('digital_adoption')->all();
        $polonnaruwa=Polonnaruwa::pluck('digital_adoption')->all();
        $puttalama=Puttalam::pluck('digital_adoption')->all();
        $ratnapura=Ratnapura::pluck('digital_adoption')->all();
        $trincomalee=Trincomalee::pluck('digital_adoption')->all();
        $vavuniya=Vavuniya::pluck('digital_adoption')->all();

        $digitaladoption = [
            ['Category', 'Value'],
            ['Ampara', 3.84], //ampara
            ['Anuradhapura', $anuradhapura],
            ['Badulla', $badulla],
            ['Batticaloa', $batticaloa],
            ['Colombo', $colombo],
            ['Galle', $galle],
            ['Gampaha', $gampaha],
            ['Hambantota', $hambantota],
            ['Jaffna', $jaffna],
            ['Kaluthara', $kaluthara],
            ['Kandy', $kandy],
            ['Kegalle', $kegalle],
            ['Kilinochchi', $kilinochchi],
            ['Kurunegala', $kurunagala],
            ['Mannar', $mannar],
            ['Matale', $matale],
            ['Matara', $matara],
            ['Monaragala', $monaragala],
            ['Mulativu', $mulativu],
            ['Nuwaraeliya', $nuwaraeliya],
            ['Polonnaruwa', $polonnaruwa],
            ['Puttalama', $puttalama],
            ['Ratnapura', $ratnapura],
            ['Trincomalee', $trincomalee],
            ['Vavuniya', $vavuniya],
        ];

        return view ('MainIndexes.DigitalAdoption',compact('digitaladoption'));
    }

    public function Ampara(){
        $ampara=Ampara::all();

        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',1.29], //startups
            ['Service Employment',$ampara->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$ampara->pluck('it_busns3')],
            ['Banks PP',$ampara->pluck('banks_pp3')]
        ];

        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.57], //device
            ['Digital Literacy',$ampara->pluck('digital_literacy3')],
            ['Communication',$ampara->pluck('communication3')],
            ['Internet PP',$ampara->pluck('internet3')]
        ];

        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.50], //4G
            ['Digital Literacy',$ampara->pluck('mobile3')],
            ['Communication',$ampara->pluck('active_mobile3')],
            ['Internet PP',$ampara->pluck('broadband3')]
        ];

        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',2.78], //skilledPool
            ['Future Pool',$ampara->pluck('future_pool3')],
            ['Secondary Pool',$ampara->pluck('secondary_pool3')],
            ['Labs',$ampara->pluck('labs3')],
            ['Access',$ampara->pluck('access3')]
        ];

        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',2.78], //income
            ['Employment',$ampara->pluck('employment3')],
        ];

        return view('Districts.Ampara',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }
}
