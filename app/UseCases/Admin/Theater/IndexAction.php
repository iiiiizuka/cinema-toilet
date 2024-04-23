<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;

class IndexAction
{
    public function __invoke(): array
    {
        return [
            'theaters' => Theater::with(['cinema'])->get(),
        ];
    }
}
