<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Voiture extends Model
{
    use HasFactory;
	
    protected int $price = 0; 
    protected $car;
  
    public function __construct()
    {
        $this->car = new VoitureFactory();
    }

    public function getCar($model=null){
        $this->car->make($model);
    }

    public function getPrice(){
        return $this->price;
    }

}
