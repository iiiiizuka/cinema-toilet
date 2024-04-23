<?php

namespace App\UseCases\Admin\Theater;

class IndexAction
{
    public function __invoke(int $cinema_id): array
    {
        $cinema = Cinema::with(['theaters'])->findOrFail($cinema_id);

        return [
            'cinema' => $cinema,
            'theaters' => $cinema->theaters,
        ];
    }
}
