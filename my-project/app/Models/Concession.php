<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Iterator;

class Concession extends Model 
{
    use HasFactory;

    private $cars = [];

    public function addCar($car){
        array_push($this->cars,$car);
    }

    public function getCars(){
        return $this->cars;
    }

    public function getIterator(){
        return new Iterator($this->cars);
    }
}
