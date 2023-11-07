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

    public function Anuradhapura(){
    
        $anuradhapura=Anuradhapura::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.76], //startups
            ['Service Employment',$anuradhapura->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$anuradhapura->pluck('it_busns3')],
            ['Banks PP',$anuradhapura->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',2.01], //device
            ['Digital Literacy',$anuradhapura->pluck('digital_literacy3')],
            ['Communication',$anuradhapura->pluck('communication3')],
            ['Internet PP',$anuradhapura->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.50], //4G
            ['Digital Literacy',$anuradhapura->pluck('mobile3')],
            ['Communication',$anuradhapura->pluck('active_mobile3')],
            ['Internet PP',$anuradhapura->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',0.59], //skilledPool
            ['Future Pool',$anuradhapura->pluck('future_pool3')],
            ['Secondary Pool',$anuradhapura->pluck('secondary_pool3')],
            ['Labs',$anuradhapura->pluck('labs3')],
            ['Access',$anuradhapura->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.00], //income
            ['Employment',$anuradhapura->pluck('employment3')],
        ];        return view('Districts.Anuradhapura',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }

public function Colombo(){

        $colombo=Colombo::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',39.76], //startups
            ['Service Employment',$colombo->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$colombo->pluck('it_busns3')],
            ['Banks PP',$colombo->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',9.50], //device
            ['Digital Literacy',$colombo->pluck('digital_literacy3')],
            ['Communication',$colombo->pluck('communication3')],
            ['Internet PP',$colombo->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',8.42], //4G
            ['Digital Literacy',$colombo->pluck('mobile3')],
            ['Communication',$colombo->pluck('active_mobile3')],
            ['Internet PP',$colombo->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',15.80], //skilledPool
            ['Future Pool',$colombo->pluck('future_pool3')],
            ['Secondary Pool',$colombo->pluck('secondary_pool3')],
            ['Labs',$colombo->pluck('labs3')],
            ['Access',$colombo->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',7.85], //income
            ['Employment',$colombo->pluck('employment3')],
        ];        return view('Districts.Colombo',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


    public function Gampaha(){
    
        $gampaha=Gampaha::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',5.30], //startups
            ['Service Employment',$gampaha->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$gampaha->pluck('it_busns3')],
            ['Banks PP',$gampaha->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',6.93], //device
            ['Digital Literacy',$gampaha->pluck('digital_literacy3')],
            ['Communication',$gampaha->pluck('communication3')],
            ['Internet PP',$gampaha->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',8.98], //4G
            ['Digital Literacy',$gampaha->pluck('mobile3')],
            ['Communication',$gampaha->pluck('active_mobile3')],
            ['Internet PP',$gampaha->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',9.92], //skilledPool
            ['Future Pool',$gampaha->pluck('future_pool3')],
            ['Secondary Pool',$gampaha->pluck('secondary_pool3')],
            ['Labs',$gampaha->pluck('labs3')],
            ['Access',$gampaha->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',6.10], //income
            ['Employment',$gampaha->pluck('employment3')],
        ];        return view('Districts.Gampaha',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }



    public function Kurunegala(){
    
        $kurunegala=Kurunagala::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.98], //startups
            ['Service Employment',$kurunegala->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$kurunegala->pluck('it_busns3')],
            ['Banks PP',$kurunegala->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',6.02], //device
            ['Digital Literacy',$kurunegala->pluck('digital_literacy3')],
            ['Communication',$kurunegala->pluck('communication3')],
            ['Internet PP',$kurunegala->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',6.08], //4G
            ['Digital Literacy',$kurunegala->pluck('mobile3')],
            ['Communication',$kurunegala->pluck('active_mobile3')],
            ['Internet PP',$kurunegala->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',5.58], //skilledPool
            ['Future Pool',$kurunegala->pluck('future_pool3')],
            ['Secondary Pool',$kurunegala->pluck('secondary_pool3')],
            ['Labs',$kurunegala->pluck('labs3')],
            ['Access',$kurunegala->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.89], //income
            ['Employment',$kurunegala->pluck('employment3')],
        ];        return view('Districts.Kurunegala',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }



    public function Kandy(){
    
        $kandy=Kandy::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',2.77], //startups
            ['Service Employment',$kandy->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$kandy->pluck('it_busns3')],
            ['Banks PP',$kandy->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',6.05], //device
            ['Digital Literacy',$kandy->pluck('digital_literacy3')],
            ['Communication',$kandy->pluck('communication3')],
            ['Internet PP',$kandy->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',5.52], //4G
            ['Digital Literacy',$kandy->pluck('mobile3')],
            ['Communication',$kandy->pluck('active_mobile3')],
            ['Internet PP',$kandy->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',6.57], //skilledPool
            ['Future Pool',$kandy->pluck('future_pool3')],
            ['Secondary Pool',$kandy->pluck('secondary_pool3')],
            ['Labs',$kandy->pluck('labs3')],
            ['Access',$kandy->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.50], //income
            ['Employment',$kandy->pluck('employment3')],
        ];        return view('Districts.Kandy',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


    public function Galle(){
    
        $galle=Galle::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',39.76], //startups
            ['Service Employment',$galle->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$galle->pluck('it_busns3')],
            ['Banks PP',$galle->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.54], //device
            ['Digital Literacy',$galle->pluck('digital_literacy3')],
            ['Communication',$galle->pluck('communication3')],
            ['Internet PP',$galle->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',3.84], //4G
            ['Digital Literacy',$galle->pluck('mobile3')],
            ['Communication',$galle->pluck('active_mobile3')],
            ['Internet PP',$galle->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',1.71], //skilledPool
            ['Future Pool',$galle->pluck('future_pool3')],
            ['Secondary Pool',$galle->pluck('secondary_pool3')],
            ['Labs',$galle->pluck('labs3')],
            ['Access',$galle->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.38], //income
            ['Employment',$galle->pluck('employment3')],
        ];        return view('Districts.Galle',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


    public function Kaluthara(){
    
        $kaluthara=Kaluthara::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',2.27], //startups
            ['Service Employment',$kaluthara->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$kaluthara->pluck('it_busns3')],
            ['Banks PP',$kaluthara->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',2.21], //device
            ['Digital Literacy',$kaluthara->pluck('digital_literacy3')],
            ['Communication',$kaluthara->pluck('communication3')],
            ['Internet PP',$kaluthara->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',4.02], //4G
            ['Digital Literacy',$kaluthara->pluck('mobile3')],
            ['Communication',$kaluthara->pluck('active_mobile3')],
            ['Internet PP',$kaluthara->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',2.27], //skilledPool
            ['Future Pool',$kaluthara->pluck('future_pool3')],
            ['Secondary Pool',$kaluthara->pluck('secondary_pool3')],
            ['Labs',$kaluthara->pluck('labs3')],
            ['Access',$kaluthara->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.17], //income
            ['Employment',$kaluthara->pluck('employment3')],
        ];        return view('Districts.Kaluthara',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


    public function Matara(){
    
        $matara=Matara::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.58], //startups
            ['Service Employment',$matara->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$matara->pluck('it_busns3')],
            ['Banks PP',$matara->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',4.78], //device
            ['Digital Literacy',$matara->pluck('digital_literacy3')],
            ['Communication',$matara->pluck('communication3')],
            ['Internet PP',$matara->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',6.36], //4G
            ['Digital Literacy',$matara->pluck('mobile3')],
            ['Communication',$matara->pluck('active_mobile3')],
            ['Internet PP',$matara->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',6.56], //skilledPool
            ['Future Pool',$matara->pluck('future_pool3')],
            ['Secondary Pool',$matara->pluck('secondary_pool3')],
            ['Labs',$matara->pluck('labs3')],
            ['Access',$matara->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.43], //income
            ['Employment',$matara->pluck('employment3')],
        ];        return view('Districts.Matara',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }

    public function Ratnapura(){
    
        $ratnapura=Ratnapura::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',2.25], //startups
            ['Service Employment',$ratnapura->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$ratnapura->pluck('it_busns3')],
            ['Banks PP',$ratnapura->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',4.10], //device
            ['Digital Literacy',$ratnapura->pluck('digital_literacy3')],
            ['Communication',$ratnapura->pluck('communication3')],
            ['Internet PP',$ratnapura->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',6.92], //4G
            ['Digital Literacy',$ratnapura->pluck('mobile3')],
            ['Communication',$ratnapura->pluck('active_mobile3')],
            ['Internet PP',$ratnapura->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',5.69], //skilledPool
            ['Future Pool',$ratnapura->pluck('future_pool3')],
            ['Secondary Pool',$ratnapura->pluck('secondary_pool3')],
            ['Labs',$ratnapura->pluck('labs3')],
            ['Access',$ratnapura->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.04], //income
            ['Employment',$ratnapura->pluck('employment3')],
        ];        return view('Districts.Ratnapura',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


    public function Jaffna(){
    
        $jaffna=Jaffna::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',6.98], //startups
            ['Service Employment',$jaffna->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$jaffna->pluck('it_busns3')],
            ['Banks PP',$jaffna->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.48], //device
            ['Digital Literacy',$jaffna->pluck('digital_literacy3')],
            ['Communication',$jaffna->pluck('communication3')],
            ['Internet PP',$jaffna->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',3.37], //4G
            ['Digital Literacy',$jaffna->pluck('mobile3')],
            ['Communication',$jaffna->pluck('active_mobile3')],
            ['Internet PP',$jaffna->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',3.21], //skilledPool
            ['Future Pool',$jaffna->pluck('future_pool3')],
            ['Secondary Pool',$jaffna->pluck('secondary_pool3')],
            ['Labs',$jaffna->pluck('labs3')],
            ['Access',$jaffna->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.15], //income
            ['Employment',$jaffna->pluck('employment3')],
        ];        return view('Districts.Jaffna',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }



public function Kegalle(){
    
        $kegalle=Kegalle::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.81], //startups
            ['Service Employment',$kegalle->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$kegalle->pluck('it_busns3')],
            ['Banks PP',$kegalle->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.78], //device
            ['Digital Literacy',$kegalle->pluck('digital_literacy3')],
            ['Communication',$kegalle->pluck('communication3')],
            ['Internet PP',$kegalle->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',5.89], //4G
            ['Digital Literacy',$kegalle->pluck('mobile3')],
            ['Communication',$kegalle->pluck('active_mobile3')],
            ['Internet PP',$kegalle->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',3.76], //skilledPool
            ['Future Pool',$kegalle->pluck('future_pool3')],
            ['Secondary Pool',$kegalle->pluck('secondary_pool3')],
            ['Labs',$kegalle->pluck('labs3')],
            ['Access',$kegalle->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.12], //income
            ['Employment',$kegalle->pluck('employment3')],
        ];        return view('Districts.Kegalle',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Puttalam(){
    
        $puttalam=Puttalam::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',1.72], //startups
            ['Service Employment',$puttalam->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$puttalam->pluck('it_busns3')],
            ['Banks PP',$puttalam->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.51], //device
            ['Digital Literacy',$puttalam->pluck('digital_literacy3')],
            ['Communication',$puttalam->pluck('communication3')],
            ['Internet PP',$puttalam->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.22], //4G
            ['Digital Literacy',$puttalam->pluck('mobile3')],
            ['Communication',$puttalam->pluck('active_mobile3')],
            ['Internet PP',$puttalam->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',0.63], //skilledPool
            ['Future Pool',$puttalam->pluck('future_pool3')],
            ['Secondary Pool',$puttalam->pluck('secondary_pool3')],
            ['Labs',$puttalam->pluck('labs3')],
            ['Access',$puttalam->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',2.89], //income
            ['Employment',$puttalam->pluck('employment3')],
        ];        return view('Districts.Puttalam',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Badulla(){
    
        $badulla=Badulla::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',2.71], //startups
            ['Service Employment',$badulla->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$badulla->pluck('it_busns3')],
            ['Banks PP',$badulla->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',5.66], //device
            ['Digital Literacy',$badulla->pluck('digital_literacy3')],
            ['Communication',$badulla->pluck('communication3')],
            ['Internet PP',$badulla->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.96], //4G
            ['Digital Literacy',$badulla->pluck('mobile3')],
            ['Communication',$badulla->pluck('active_mobile3')],
            ['Internet PP',$badulla->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',0.89], //skilledPool
            ['Future Pool',$badulla->pluck('future_pool3')],
            ['Secondary Pool',$badulla->pluck('secondary_pool3')],
            ['Labs',$badulla->pluck('labs3')],
            ['Access',$badulla->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.15], //income
            ['Employment',$badulla->pluck('employment3')],
        ];        return view('Districts.Badulla',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }

public function Hambantota(){
    
        $hambantota=Hambantota::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.36], //startups
            ['Service Employment',$hambantota->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$hambantota->pluck('it_busns3')],
            ['Banks PP',$hambantota->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',1.80], //device
            ['Digital Literacy',$hambantota->pluck('digital_literacy3')],
            ['Communication',$hambantota->pluck('communication3')],
            ['Internet PP',$hambantota->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',2.71], //4G
            ['Digital Literacy',$hambantota->pluck('mobile3')],
            ['Communication',$hambantota->pluck('active_mobile3')],
            ['Internet PP',$hambantota->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',0.67], //skilledPool
            ['Future Pool',$hambantota->pluck('future_pool3')],
            ['Secondary Pool',$hambantota->pluck('secondary_pool3')],
            ['Labs',$hambantota->pluck('labs3')],
            ['Access',$hambantota->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',2.59], //income
            ['Employment',$hambantota->pluck('employment3')],
        ];        return view('Districts.Hambantota',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Matale(){
    
        $matale=Matale::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',1.38], //startups
            ['Service Employment',$matale->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$matale->pluck('it_busns3')],
            ['Banks PP',$matale->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',2.27], //device
            ['Digital Literacy',$matale->pluck('digital_literacy3')],
            ['Communication',$matale->pluck('communication3')],
            ['Internet PP',$matale->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.96], //4G
            ['Digital Literacy',$matale->pluck('mobile3')],
            ['Communication',$matale->pluck('active_mobile3')],
            ['Internet PP',$matale->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',2.10], //skilledPool
            ['Future Pool',$matale->pluck('future_pool3')],
            ['Secondary Pool',$matale->pluck('secondary_pool3')],
            ['Labs',$matale->pluck('labs3')],
            ['Access',$matale->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',2.85], //income
            ['Employment',$matale->pluck('employment3')],
        ];        return view('Districts.Matale',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Batticaloa(){
    
        $batticaloa=Batticaloa::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',1.24], //startups
            ['Service Employment',$batticaloa->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$batticaloa->pluck('it_busns3')],
            ['Banks PP',$batticaloa->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',1.47], //device
            ['Digital Literacy',$batticaloa->pluck('digital_literacy3')],
            ['Communication',$batticaloa->pluck('communication3')],
            ['Internet PP',$batticaloa->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',2.15], //4G
            ['Digital Literacy',$batticaloa->pluck('mobile3')],
            ['Communication',$batticaloa->pluck('active_mobile3')],
            ['Internet PP',$batticaloa->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',1.49], //skilledPool
            ['Future Pool',$batticaloa->pluck('future_pool3')],
            ['Secondary Pool',$batticaloa->pluck('secondary_pool3')],
            ['Labs',$batticaloa->pluck('labs3')],
            ['Access',$batticaloa->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',2.83], //income
            ['Employment',$batticaloa->pluck('employment3')],
        ];        return view('Districts.Batticaloa',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function NuwaraEliya(){
    
        $nuwaraeliya=NuwaraEliya::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.00], //startups
            ['Service Employment',$nuwaraeliya->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$nuwaraeliya->pluck('it_busns3')],
            ['Banks PP',$nuwaraeliya->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',5.34], //device
            ['Digital Literacy',$nuwaraeliya->pluck('digital_literacy3')],
            ['Communication',$nuwaraeliya->pluck('communication3')],
            ['Internet PP',$nuwaraeliya->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',5.80], //4G
            ['Digital Literacy',$nuwaraeliya->pluck('mobile3')],
            ['Communication',$nuwaraeliya->pluck('active_mobile3')],
            ['Internet PP',$nuwaraeliya->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',8.15], //skilledPool
            ['Future Pool',$nuwaraeliya->pluck('future_pool3')],
            ['Secondary Pool',$nuwaraeliya->pluck('secondary_pool3')],
            ['Labs',$nuwaraeliya->pluck('labs3')],
            ['Access',$nuwaraeliya->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.48], //income
            ['Employment',$nuwaraeliya->pluck('employment3')],
        ];        return view('Districts.NuwaraEliya',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Trincomalee(){
    
        $trincomalee=Trincomalee::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.00], //startups
            ['Service Employment',$trincomalee->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$trincomalee->pluck('it_busns3')],
            ['Banks PP',$trincomalee->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.86], //device
            ['Digital Literacy',$trincomalee->pluck('digital_literacy3')],
            ['Communication',$trincomalee->pluck('communication3')],
            ['Internet PP',$trincomalee->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',3.74], //4G
            ['Digital Literacy',$trincomalee->pluck('mobile3')],
            ['Communication',$trincomalee->pluck('active_mobile3')],
            ['Internet PP',$trincomalee->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',2.84], //skilledPool
            ['Future Pool',$trincomalee->pluck('future_pool3')],
            ['Secondary Pool',$trincomalee->pluck('secondary_pool3')],
            ['Labs',$trincomalee->pluck('labs3')],
            ['Access',$trincomalee->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',5.32], //income
            ['Employment',$trincomalee->pluck('employment3')],
        ];        return view('Districts.Trincomalee',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Polonnaruwa(){
    
        $plonnaruwa=Polonnaruwa::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',0.00], //startups
            ['Service Employment',$plonnaruwa->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$plonnaruwa->pluck('it_busns3')],
            ['Banks PP',$plonnaruwa->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',4.37], //device
            ['Digital Literacy',$plonnaruwa->pluck('digital_literacy3')],
            ['Communication',$plonnaruwa->pluck('communication3')],
            ['Internet PP',$plonnaruwa->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.87], //4G
            ['Digital Literacy',$plonnaruwa->pluck('mobile3')],
            ['Communication',$plonnaruwa->pluck('active_mobile3')],
            ['Internet PP',$plonnaruwa->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',3.57], //skilledPool
            ['Future Pool',$plonnaruwa->pluck('future_pool3')],
            ['Secondary Pool',$plonnaruwa->pluck('secondary_pool3')],
            ['Labs',$plonnaruwa->pluck('labs3')],
            ['Access',$plonnaruwa->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.19], //income
            ['Employment',$plonnaruwa->pluck('employment3')],
        ];        return view('Districts.Polonnaruwa',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Vavuniya(){
    
        $vavuniya=Vavuniya::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',3.75], //startups
            ['Service Employment',$vavuniya->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$vavuniya->pluck('it_busns3')],
            ['Banks PP',$vavuniya->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',4.45], //device
            ['Digital Literacy',$vavuniya->pluck('digital_literacy3')],
            ['Communication',$vavuniya->pluck('communication3')],
            ['Internet PP',$vavuniya->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.87], //4G
            ['Digital Literacy',$vavuniya->pluck('mobile3')],
            ['Communication',$vavuniya->pluck('active_mobile3')],
            ['Internet PP',$vavuniya->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',1.49], //skilledPool
            ['Future Pool',$vavuniya->pluck('future_pool3')],
            ['Secondary Pool',$vavuniya->pluck('secondary_pool3')],
            ['Labs',$vavuniya->pluck('labs3')],
            ['Access',$vavuniya->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.95], //income
            ['Employment',$vavuniya->pluck('employment3')],
        ];        return view('Districts.Vavuniya',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Monaragala(){
    
        $monaragala=Monaragala::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',1.44], //startups
            ['Service Employment',$monaragala->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$monaragala->pluck('it_busns3')],
            ['Banks PP',$monaragala->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',2.51], //device
            ['Digital Literacy',$monaragala->pluck('digital_literacy3')],
            ['Communication',$monaragala->pluck('communication3')],
            ['Internet PP',$monaragala->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',3.46], //4G
            ['Digital Literacy',$monaragala->pluck('mobile3')],
            ['Communication',$monaragala->pluck('active_mobile3')],
            ['Internet PP',$monaragala->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',3.47], //skilledPool
            ['Future Pool',$monaragala->pluck('future_pool3')],
            ['Secondary Pool',$monaragala->pluck('secondary_pool3')],
            ['Labs',$monaragala->pluck('labs3')],
            ['Access',$monaragala->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',4.14], //income
            ['Employment',$monaragala->pluck('employment3')],
        ];        return view('Districts.Monaragala',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Kilinochchi(){
    
        $kilinochchi=Kilinochchi::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',12.65], //startups
            ['Service Employment',$kilinochchi->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$kilinochchi->pluck('it_busns3')],
            ['Banks PP',$kilinochchi->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',1.50], //device
            ['Digital Literacy',$kilinochchi->pluck('digital_literacy3')],
            ['Communication',$kilinochchi->pluck('communication3')],
            ['Internet PP',$kilinochchi->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',1.59], //4G
            ['Digital Literacy',$kilinochchi->pluck('mobile3')],
            ['Communication',$kilinochchi->pluck('active_mobile3')],
            ['Internet PP',$kilinochchi->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',1.70], //skilledPool
            ['Future Pool',$kilinochchi->pluck('future_pool3')],
            ['Secondary Pool',$kilinochchi->pluck('secondary_pool3')],
            ['Labs',$kilinochchi->pluck('labs3')],
            ['Access',$kilinochchi->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.46], //income
            ['Employment',$kilinochchi->pluck('employment3')],
        ];        return view('Districts.Kilinochchi',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }


public function Mannar(){
    
        $mannar=Mannar::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',2.12], //startups
            ['Service Employment',$mannar->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$mannar->pluck('it_busns3')],
            ['Banks PP',$mannar->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.98], //device
            ['Digital Literacy',$mannar->pluck('digital_literacy3')],
            ['Communication',$mannar->pluck('communication3')],
            ['Internet PP',$mannar->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',4.12], //4G
            ['Digital Literacy',$mannar->pluck('mobile3')],
            ['Communication',$mannar->pluck('active_mobile3')],
            ['Internet PP',$mannar->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',4.78], //skilledPool
            ['Future Pool',$mannar->pluck('future_pool3')],
            ['Secondary Pool',$mannar->pluck('secondary_pool3')],
            ['Labs',$mannar->pluck('labs3')],
            ['Access',$mannar->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.23], //income
            ['Employment',$mannar->pluck('employment3')],
        ];        return view('Districts.Mannar',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }



public function Mulativu(){
    
        $mulativu=Mulativu::all();        
        $businessEnviroment = [
            ['Category', 'Value'],
            ['Startups PP',7.39], //startups
            ['Service Employment',$mulativu->pluck('service_employment3')],
            ['IT Busns/Reg Busns',$mulativu->pluck('it_busns3')],
            ['Banks PP',$mulativu->pluck('banks_pp3')]
        ];        $digitalAdoption = [
            ['Category', 'Value'],
            ['Device',3.30], //device
            ['Digital Literacy',$mulativu->pluck('digital_literacy3')],
            ['Communication',$mulativu->pluck('communication3')],
            ['Internet PP',$mulativu->pluck('internet3')]
        ];        $technologyInfrastructure = [
            ['Category', 'Value'],
            ['4G',5.14], //4G
            ['Digital Literacy',$mulativu->pluck('mobile3')],
            ['Communication',$mulativu->pluck('active_mobile3')],
            ['Internet PP',$mulativu->pluck('broadband3')]
        ];        $capacityGrowth = [
            ['Category', 'Value'],
            ['Skilled Pool',3.79], //skilledPool
            ['Future Pool',$mulativu->pluck('future_pool3')],
            ['Secondary Pool',$mulativu->pluck('secondary_pool3')],
            ['Labs',$mulativu->pluck('labs3')],
            ['Access',$mulativu->pluck('access3')]
        ];        $socioEconomic = [
            ['Category', 'Value'],
            ['Income',3.71], //income
            ['Employment',$mulativu->pluck('employment3')],
        ];        return view('Districts.Mulativu',compact('businessEnviroment','digitalAdoption','technologyInfrastructure','capacityGrowth','socioEconomic'));
    }





}
