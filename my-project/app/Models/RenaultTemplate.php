<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenaultTemplate extends VoitureTemplate
{
    use HasFactory;

    public function __construct()
    {
    }

    public function getMarque(){
        return "Renault \n";
    }

    public function getOptions(){
        return "- Toit ouvrant \n
                - Jantes chromées \n
                - Nitro";
    }

}
