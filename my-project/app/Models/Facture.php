<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Facture extends Model
{
    use HasFactory;

    static private Voiture $voitures;

    public function __construct($voitures){
        $this->voitures = $voitures;
    }

    public function getPrice(){
        $price = 0;
        foreach ($voitures as $key => $value) {
            $price += $voitures->getPrice();
        }
        return $price;
    }
}
