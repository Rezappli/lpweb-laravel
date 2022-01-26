<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Facture extends Model
{
    use HasFactory;

    public int $montant = 0;

    public function __construct(){
     
    }

    public function add(Voiture $voiture){
        $this->montant += $voiture->getPrice();
    }
}
