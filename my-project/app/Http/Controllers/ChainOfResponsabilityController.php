<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\ErreurConstructionHandler;
use  App\Models\ErreurAcheminementHandler;
use  App\Models\LivreHandler;
use  App\Models\Handler;


class ChainOfResponsabilityController extends Controller
{
    //
    public function index()
    {
        $errorC = new ErreurConstructionHandler();
        $errorA = new ErreurAcheminementHandler();
        $livre = new LivreHandler();
   

        $errorC->setNext($errorA)->setNext($livre);
        $result = $this->chain($errorC);
        
        return view('chain',
        ['result'=>$result]);
        
    }

    function chain(Handler $handler)
    {
        $finalResult = "";
        foreach (["ErreurConstruction", "ErreurAcheminement", "Livre"] as $chain) {
            $result = $handler->handle($chain);
            $finalResult .= $result;
            
        }
        return $finalResult;
    }
}
