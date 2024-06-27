<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UseCases\Admin\Cinema\DestroyAction;
use App\UseCases\Admin\Cinema\IndexAction;
use App\UseCases\Admin\Cinema\ShowAction;
use App\UseCases\Admin\Cinema\StoreAction;
use App\UseCases\Admin\Cinema\UpdateAction;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    public function __construct(
        private StoreAction $store_action
    ) {}

    /**
     * 一覧
     */
    public function index(IndexAction $action): View
    {
        return view(
            'admin.cinema.index',
            $action(),
        );
    }

    /**
     * 新規登録画面
     */
    public function create(): View
    {
        return view('admin.cinema.create');
    }

    /**
     * 新規登録処理
     */
    public function store(Request $request): RedirectResponse
    {
        $this->store_action($request);

        return redirect()->route('admin.cinema.index');
    }

    /**
     * 詳細画面
     */
    public function show(ShowAction $action, string $id): View
    {
        return view(
            'admin.cinema.show',
            $action($id),
        );
    }

    /**
     * 更新画面
     */
    public function edit(EditAction $action, string $id): View
    {
        return view(
            'admin.cinema.edit',
            $action($id),
        );
    }

    /**
     * 更新処理
     */
    public function update(UpdateAction $action, Request $request, string $id): RedirectResponse
    {
        $action($request, $id);

        return redirect()->route('admin.cinema.index');
    }

    /**
     * 削除処理
     */
    public function destroy(DestroyAction $action, string $id): RedirectResponse
    {
        $action($id);

        return redirect()->route('admin.cinema.index');
    }
}
