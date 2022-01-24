<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Voiture extends Model
{
    use HasFactory;
	
    private String $marque;
    private String $vitesse;
    private String $cv;
    private int $price; 

    abstract function getMarque();
    abstract function getVitesse();
    abstract function getCv();

    protected $car;
  
    public function __construct()
    {
        $this->car = new VoitureFactory();
    }

    public function getCar($model=null){
        $this->car->make($model);
    }


}
