<?php

namespace App\Models;

interface Composite 
{
    public function getPrixTotal($price);
    public function addNode($node);
    public function setNodeCount($new_count);
    public function getNodeCount();
}
