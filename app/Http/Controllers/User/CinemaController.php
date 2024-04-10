<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\UseCases\User\Cinema\IndexAction;
use App\UseCases\User\Cinema\ShowAction;
use Illuminate\Contracts\View\View;

class CinemaController extends Controller
{
    /**
     * 一覧
     */
    public function index(IndexAction $action): View
    {
        return view(
            'user.cinema.index',
            $action(),
        );
    }

    /**
     * 詳細画面
     */
    public function show(ShowAction $action, string $id): View
    {
        return view(
            'user.cinema.show',
            $action($id),
        );
    }
}
