<?php

namespace App\UseCases\User\Cinema;

use App\Models\Cinema;

class ShowAction
{
    public function __invoke(int $cinema_id): array
    {
        return [
            'cinema' => Cinema::with(['theaters'])->findOrFail($cinema_id)
        ];
    }
}
