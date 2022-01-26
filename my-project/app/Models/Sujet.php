<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujet extends Model
{
    use HasFactory;

    public $observeurs = [];

    public function notify(){
        foreach ($this->observeurs as $obs) {
            $obs->updateObs();
        }
    }

    public function addObs($obs){
        array_push($this->observeurs,$obs);
    }

    public function removeObs($obs){
        unset($observeurs,$obs);
    }
}
