<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Composite;


abstract class Voiture extends Model implements Composite
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

    public function setPrice($price){
        $this->price = $price;
    }



}
