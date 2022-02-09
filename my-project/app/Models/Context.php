<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Context extends Model 
{
    use HasFactory;

    public function __construct(Construire $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(Construire $state): void
    {
        echo "Changement d'Etat en " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }
    
    public function operation(): void
    {
        $this->state->handle();
    }

}
