<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class EditAction
{
    public function __invoke(int $cinem_id): array
    {
        return [
            'cinema' => Cinema::findOrFail($cinem_id)
        ];
    }
}
