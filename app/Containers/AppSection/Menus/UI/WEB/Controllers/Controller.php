<?php

namespace App\Containers\AppSection\Menus\UI\WEB\Controllers;

use App\Containers\AppSection\Menus\UI\WEB\Requests\CreateMenusRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\DeleteMenusRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\GetAllMenusesRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\FindMenusByIdRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\UpdateMenusRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\StoreMenusRequest;
use App\Containers\AppSection\Menus\UI\WEB\Requests\EditMenusRequest;
use App\Containers\AppSection\Menus\Actions\CreateMenusAction;
use App\Containers\AppSection\Menus\Actions\FindMenusByIdAction;
use App\Containers\AppSection\Menus\Actions\GetAllMenusesAction;
use App\Containers\AppSection\Menus\Actions\UpdateMenusAction;
use App\Containers\AppSection\Menus\Actions\DeleteMenusAction;
use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function index(GetAllMenusesRequest $request)
    {
        $menuses = app(GetAllMenusesAction::class)->run($request);
        // ..
    }

    public function show(FindMenusByIdRequest $request)
    {
        $menus = app(FindMenusByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateMenusRequest $request)
    {
        // ..
    }

    public function store(StoreMenusRequest $request)
    {
        $menus = app(CreateMenusAction::class)->run($request);
        // ..
    }

    public function edit(EditMenusRequest $request)
    {
        $menus = app(FindMenusByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateMenusRequest $request)
    {
        $menus = app(UpdateMenusAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteMenusRequest $request)
    {
         $result = app(DeleteMenusAction::class)->run($request);
         // ..
    }
}
