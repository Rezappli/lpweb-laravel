<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;
use  App\Models\Strategie;
use  App\Models\Opel;
use  App\Models\Renault;
use  App\Models\TVA10;
use  App\Models\TVA20;

class FactureLine extends Model
{
    use HasFactory;

    private Strategie $strat;

    public function __construct(Voiture $voiture){
        if(get_class($voiture) == get_class(new Opel())){
            $this->strat = new TVA20();
        }else{
            $this->strat = new TVA10();
        }
    }

    public function getStrat(){
        return $this->strat;
    }


}
