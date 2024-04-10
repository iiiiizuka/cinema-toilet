<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class ShowAction
{
    public function __invoke(int $cinem_id): array
    {
        return [
            'cinema' => Cinema::with(['theaters'])->findOrFail($cinem_id)
        ];
    }
}
