<?php

namespace App\UseCases\Admin\Cinema;

use App\Models\Cinema;

class DestroyAction
{
    public function __invoke(int $cinema_id): bool
    {
        return Cinema::destroy($cinema_id);
    }
}
