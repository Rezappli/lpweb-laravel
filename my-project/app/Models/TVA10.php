<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Strategie;

class TVA10 extends Model implements Strategie
{
    use HasFactory;

    public function __construct(){
        
    }

    public function process(){
        return '10%';
    }
    
}
