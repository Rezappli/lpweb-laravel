<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iterator extends Model
{
    use HasFactory;

    private $offset = 0;
    private $array;

    public function __construct($array) {
        $this->offset = 0;
        $this->array = $array;
    }

    public function next() { 
        return $this->array[$this->offset++];
    }

    public function hasNext() {
        return isset($this->array[$this->offset]);
    }


}
