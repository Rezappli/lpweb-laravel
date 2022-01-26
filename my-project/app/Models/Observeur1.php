<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observeur1 extends Model
{
    use HasFactory;

    private int $count = 0;

    public function updateObs(){
        $this->count++;
    }

    public function display(){
        if($this->count == 0){
            return 'Aucune';
        }
        return 'Updaté '.$this->count.' fois';
    }
}
