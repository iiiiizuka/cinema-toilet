<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;
use Illuminate\Http\Request;

class StoreAction
{
    public function __invoke(Request $request): Cinema
    {
        $cinema = new Cinema();

        $cinema->fill($request->all())->save();

        return $cinema;
    }
}
