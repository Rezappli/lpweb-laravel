<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sujet;
use App\Models\Observeur1;
use App\Models\Observeur2;


class ObserveurController extends Controller
{
    public function index()
    {
        $sujet = new Sujet();
        $obs1 = new Observeur1;
        $obs2 = new Observeur2;

        $sujet->addObs($obs1);
        $sujet->addObs($obs2);

    
        
        return view('observeur',
        ['sujet'=>$sujet]);
        
    }
}
