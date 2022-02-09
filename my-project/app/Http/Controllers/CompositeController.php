<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Opel;
use  App\Models\Opel1;
use  App\Models\Opel2;
use  App\Models\Renault;
use  App\Models\Renault1;
use  App\Models\VoitureComposite;

class CompositeController extends Controller
{
    public function index()
    {

        $opel1 = new Opel1(12999);
        $opel2 = new Opel2(27000);
        $renault1 = new Renault1(287876900);

        $opels = new Opel();
        $renaults = new Renault();

        $opelsCount = $opels->addNode($opel1);
        $priceOpel1 = $opels->getPrixTotal($opelsCount);

        $opelsCount = $opels->addNode($opel2);
        $priceOpel2 = $opels->getPrixTotal($opelsCount);

        $renaultsCount = $renaults->addNode($renault1);
        $priceRenault1 = $renaults->getPrixTotal($renaultsCount);

        $voitures = new VoitureComposite();
        $voituresCount = $voitures->addNode($opels);
        $priceVoituresOpel = $voitures->getPrixTotal($voituresCount);

        $voituresCount = $voitures->addNode($renaults);
        $priceVoituresRenault =  $voitures->getPrixTotal($voituresCount);

        return view('composite',
        ['rang1'=>$voitures->getPrixTotal(1),
         'rang2Opel'=> $priceVoituresOpel, 
         'rang2Renault'=>$priceVoituresRenault,
         'rang3Opel'=>$priceOpel1, 
         'rang3Opelbis'=>$priceOpel2, 
         'rang3Renault'=>$priceRenault1, 
        ]);
        
    }
}
