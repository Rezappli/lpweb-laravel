<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Composite;


class VoitureComposite extends Model implements Composite
{
    use HasFactory;
	
    private $voitures = array();
    private $voitureCount;
  
    public function __construct()
    {
    }

    public function getNodeCount() {
        return $this->voitureCount;
    }

    public function setNodeCount($newCount) {
        $this->voitureCount = $newCount;
    }

    public function getPrixTotal($voitureToGet){
        if ($voitureToGet <= $this->voitureCount) {
            return $this->voitures[$voitureToGet]->getPrixTotal(1);
        } else {
            return FALSE;
        }
    }

    public function addNode($voiture) {
        $this->setNodeCount($this->getNodeCount() + 1);
        $this->voitures[$this->getNodeCount()] = $voiture;
        return $this->getNodeCount();
    }


}
