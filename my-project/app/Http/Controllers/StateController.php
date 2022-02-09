<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Demande;
use  App\Models\Context;


class StateController extends Controller
{
    public function index()
    {
        $context = new Context(new Demande());
        
        return view('state',
        ['context'=>$context]);
    }
}
