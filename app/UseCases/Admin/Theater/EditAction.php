<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;

class EditAction
{
    public function __invoke(int $theater_id): array
    {
        return [
            'theater' => Theater::findOrFail($theater_id),
        ];
    }
}
