<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\AbstractHandler;

class LivreHandler extends AbstractHandler
{
    use HasFactory;

    public function handle(string $request): ?string
    {
        if ($request === "Livre") {
            return  $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}
