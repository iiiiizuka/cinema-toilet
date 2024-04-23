<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;
use Illuminate\Http\Request;

class UpdateAction
{
    public function __invoke(Request $request, int $theater_id): Theater
    {
        $theater = Theater::findOrFail($theater_id);

        $theater->fill($request->all())->save();

        return $theater;
    }
}
