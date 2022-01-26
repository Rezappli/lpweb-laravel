<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Opel extends Voiture
{
    use HasFactory;

    public function __construct()
    {
        $this->price = 1000;
    }

}
