<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;

class ShowAction
{
    public function __invoke(int $theater_id): array
    {
        return [
            'theater' => Theater::findOrFail($theater_id)
        ];
    }
}
