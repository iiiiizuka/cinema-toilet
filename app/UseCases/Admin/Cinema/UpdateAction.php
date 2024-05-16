<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;
use Illuminate\Http\Request;

class UpdateAction
{
    public function __invoke(Request $request, int $cinema_id): Cinema
    {
        $cinema = Cinema::findOrFail($cinema_id);

        $cinema->fill($request->all())->save();

        return $cinema;
    }
}
