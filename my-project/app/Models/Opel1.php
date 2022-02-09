<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Composite;


class Opel1 extends Model implements Composite
{
    use HasFactory;
	
    protected int $price; 
  
    public function __construct($price)
    {
        $this->price = $price;
    }

    function getNodeCount() {
        return 1;
    }

    function setNodeCount($newCount) {
      return FALSE;
    }

    public function getPrixTotal($nodeToGet){
        if (1 == $nodeToGet) {
            return $this->price;
        } else {
          return FALSE;
        }
    }

    function addNode($node) {
        return FALSE;
    }
}
