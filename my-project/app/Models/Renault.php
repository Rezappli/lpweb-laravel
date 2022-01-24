<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Renault extends Voiture
{
    use HasFactory;


    private String $marque = "Renault";
    private int $vitesse = 120;
    private int $cv = 200;

    function getMarque(){
        return $this->marque;
    }

    function getVitesse(){
        return $this->vitesse;
    }

    function getCv(){
        return $this->cv;
    }


}
