<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Singleton;


class SingletonController extends Controller
{

    public function index()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('welcome',
        ['a'=>$a,'b'=>$b]);
    }

    
}



