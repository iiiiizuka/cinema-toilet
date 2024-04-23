<?php

namespace App\UseCases\Admin\Theater;

use App\Models\Theater;

class DestroyAction
{
    public function __invoke(int $theater_id): bool
    {
        return Theater::destroy($theater_id);
    }
}
