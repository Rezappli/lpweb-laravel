<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Construire;
use  App\Models\ConstruireChassis;


class Demande extends Construire 
{
    use HasFactory;

    public function handle(): void
    {
        $this->context->transitionTo(new ConstruireChassis());
    }


}
