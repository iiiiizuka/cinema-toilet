<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class DestroyAction
{
    public function __invoke(int $cinem_id): bool
    {
        return Cinema::destroy($cinem_id);
    }
}
