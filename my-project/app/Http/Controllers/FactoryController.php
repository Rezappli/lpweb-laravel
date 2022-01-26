<?php

namespace App\Http\Controllers;

use App\Models\VoitureFactory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function index($model)
    {
        $a = new VoitureFactory();
        
        return view('factory',
        ['result'=>get_class($a->make($model))]);
        
    }
}
