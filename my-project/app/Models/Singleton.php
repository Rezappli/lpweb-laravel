<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singleton extends Model
{
    use HasFactory;

    public $count = 0;

    public static $_instance;

    public static function getInstance() {
        if ( !(self::$_instance instanceof self) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function incrementCount(){
        return $this->count++;
    }

    
}
