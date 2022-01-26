<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;
use App\Models\VoitureFactory;


class IteratorController extends Controller
{
    public function index()
    {


        $factory = new VoitureFactory();
        $opel = $factory->make('opel');
        $renault = $factory->make('renault');

        $concession = new Concession();
        $concession->addCar($opel);
        $concession->addCar($renault);

        $iterator = $concession->getIterator();
        
        return view('iterator',
        ['iterator'=>$iterator]);
        
    }
}
