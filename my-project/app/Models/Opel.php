<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Opel extends Voiture
{
    use HasFactory;

    private String $marque = "Opel";
    private int $vitesse = 2999;
    private int $cv = 90;

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
