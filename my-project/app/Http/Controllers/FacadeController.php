<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoitureFactory;
use App\Models\Concession;
use App\Models\Facture;


class FacadeController extends Controller
{

    function commander(){
        $factory = new VoitureFactory();
        $opel = $factory->make('opel');
        $renault = $factory->make('renault');

        $concession = new Concession();
        $facture = new Facture();

        $facture->add($opel);
        $facture->add($renault);
        
        $concession->addCar($opel);
        $concession->addCar($renault);

        
        return view('facade',
        ['usine'=>get_class($factory), 'concession'=>get_class($concession), 'facture'=>get_class($facture), 'price'=>$facture->montant]); 
    }
}
