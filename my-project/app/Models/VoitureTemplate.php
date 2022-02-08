<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class VoitureTemplate extends Model
{
    use HasFactory;
  
    public function __construct()
    {
    }

    abstract protected function getMarque();

    abstract protected function getOptions();
    
    public function getText(){
        return $this->getMarque().$this->getOptions();
    }
}
