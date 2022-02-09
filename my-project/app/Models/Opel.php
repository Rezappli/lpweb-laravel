<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Voiture;

class Opel extends Voiture implements Composite 
{
    use HasFactory;

    private $opels = array();
    private $opelCount;


    public function __construct()
    {
        $this->price = 1000;
        $this->setNodeCount(0);

    }

    public function getNodeCount() {
        return $this->opelCount;
    }

    public function setNodeCount($newCount) {
        $this->opelCount = $newCount;
    }

    public function getPrixTotal($opelToGet){
        if ($opelToGet <= $this->opelCount) {
            return $this->opels[$opelToGet]->getPrixTotal(1);
        } else {
            return FALSE;
        }
    }

    public function addNode($opel) {
        $this->setNodeCount($this->getNodeCount() + 1);
        $this->opels[$this->getNodeCount()] = $opel;
        return $this->getNodeCount();
    }



}
