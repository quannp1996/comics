<?php

namespace App\Containers\AppSection\Menus\UI\API\Controllers;

use App\Containers\AppSection\Menus\UI\API\Requests\CreateMenusRequest;
use App\Containers\AppSection\Menus\UI\API\Requests\DeleteMenusRequest;
use App\Containers\AppSection\Menus\UI\API\Requests\GetAllMenusesRequest;
use App\Containers\AppSection\Menus\UI\API\Requests\FindMenusByIdRequest;
use App\Containers\AppSection\Menus\UI\API\Requests\UpdateMenusRequest;
use App\Containers\AppSection\Menus\UI\API\Transformers\MenusTransformer;
use App\Containers\AppSection\Menus\Actions\CreateMenusAction;
use App\Containers\AppSection\Menus\Actions\FindMenusByIdAction;
use App\Containers\AppSection\Menus\Actions\GetAllMenusesAction;
use App\Containers\AppSection\Menus\Actions\UpdateMenusAction;
use App\Containers\AppSection\Menus\Actions\DeleteMenusAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createMenus(CreateMenusRequest $request): JsonResponse
    {
        $menus = app(CreateMenusAction::class)->run($request);
        return $this->created($this->transform($menus, MenusTransformer::class));
    }

    public function findMenusById(FindMenusByIdRequest $request): array
    {
        $menus = app(FindMenusByIdAction::class)->run($request);
        return $this->transform($menus, MenusTransformer::class);
    }

    public function getAllMenuses(GetAllMenusesRequest $request): array
    {
        $menuses = app(GetAllMenusesAction::class)->run($request);
        return $this->transform($menuses, MenusTransformer::class);
    }

    public function updateMenus(UpdateMenusRequest $request): array
    {
        $menus = app(UpdateMenusAction::class)->run($request);
        return $this->transform($menus, MenusTransformer::class);
    }

    public function deleteMenus(DeleteMenusRequest $request): JsonResponse
    {
        app(DeleteMenusAction::class)->run($request);
        return $this->noContent();
    }
}
