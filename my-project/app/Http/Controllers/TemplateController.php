<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\RenaultTemplate;
use  App\Models\OpelTemplate;


class TemplateController extends Controller
{
    public function index()
    {
        $a = new OpelTemplate();
        $b = new RenaultTemplate();

        return view('template',
        ['a'=>$a, 'b'=>$b]);
        
    }
}
