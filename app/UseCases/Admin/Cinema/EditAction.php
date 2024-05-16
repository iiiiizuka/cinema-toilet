<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Prefecture;
use App\Models\Cinema;

class EditAction
{
    public function __invoke(int $cinema_id): array
    {
        return [
            'cinema' => Cinema::findOrFail($cinema_id),
            'prefectures' => Prefecture::all(),
        ];
    }
}
