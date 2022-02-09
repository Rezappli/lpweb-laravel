<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Renault extends Voiture
{
    use HasFactory;


    private $renaults = array();
    private $renaultCount;


    public function __construct()
    {
        $this->setNodeCount(0);
    }

    public function getNodeCount() {
        return $this->renaultCount;
    }

    public function setNodeCount($newCount) {
        $this->renaultCount = $newCount;
    }

    public function getPrixTotal($renaultToGet){
        if ($renaultToGet <= $this->renaultCount) {
            return $this->renaults[$renaultToGet]->getPrixTotal(1);
        } else {
            return FALSE;
        }
    }

    public function addNode($renault) {
        $this->setNodeCount($this->getNodeCount() + 1);
        $this->renaults[$this->getNodeCount()] = $renault;
        return $this->getNodeCount();
    }




}
