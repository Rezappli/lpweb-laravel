<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\AbstractHandler;


class ErreurConstructionHandler extends AbstractHandler
{
    use HasFactory;

    public function handle(string $request): ?string
    {
        if ($request === "ErreurConstruction") {
            return  $request . " > ";
        } else {
            return parent::handle($request);
        }
    }
}
