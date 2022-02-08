<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpelTemplate extends VoitureTemplate
{
    use HasFactory;
  
    public function __construct()
    {
    }

    public function getMarque(){
        return "Opel \n";
    }

    public function getOptions(){
        return "- Aileron \n
                - 6 roues \n
                - Phares xenon";
    }

}
