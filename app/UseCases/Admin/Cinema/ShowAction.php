<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class ShowAction
{
    public function __invoke(int $cinema_id): array
    {
        return [
            'cinema' => Cinema::with(['theaters', 'prefecture'])->findOrFail($cinema_id)
        ];
    }
}
