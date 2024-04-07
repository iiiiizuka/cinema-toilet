<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class IndexAction
{
    public function __invoke(): array
    {
        return [
            'cinemas' => Cinema::all(),
        ];
    }
}
