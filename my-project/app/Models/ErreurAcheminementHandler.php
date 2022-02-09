<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\AbstractHandler;


class ErreurAcheminementHandler extends AbstractHandler
{
    use HasFactory;

    public function handle(string $request): ?string
    {
        if ($request === "ErreurAcheminement") {
            return  $request . " > ";
        } else {
            return parent::handle($request);
        }
    }
}
