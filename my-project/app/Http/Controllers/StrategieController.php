<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\FactureLine;
use  App\Models\Opel;
use  App\Models\Renault;


class StrategieController extends Controller
{
    public function index()
    {
        $facture = new FactureLine(new Opel());
        $tva = $facture->getStrat()->process();
        $facture1 = new FactureLine(new Renault());
        $tva1 = $facture1->getStrat()->process();
        
        
        return view('strategie',
        ['tva'=>$tva, 'tva1'=>$tva1]);
        
    }
}
