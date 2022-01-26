<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voiture;

class VoitureFactory extends Model
{
    use HasFactory;

    
  
    public function make($model=null)
    {
        // if(strtolower($model) == 'renault')
        // return $this->car = new Renault();
    
        // return $this->car = new Opel();

        if(strtolower($model) == 'renault')
            return new Renault();
        else if(strtolower($model) == 'opel')
            return new Opel();
        else 
            return null;
    }
}
