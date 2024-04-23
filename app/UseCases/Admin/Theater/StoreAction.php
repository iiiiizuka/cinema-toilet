<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;
use Illuminate\Http\Request;

class StoreAction
{
    public function __invoke(Request $request): Theater
    {
        $theater = new Theater();

        $theater->fill($request->all())->save();

        return $theater;
    }
}
