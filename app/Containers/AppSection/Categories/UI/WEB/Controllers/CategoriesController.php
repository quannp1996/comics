<?php

namespace App\Containers\AppSection\Categories\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseAdminController;
use App\Containers\AppSection\Categories\UI\WEB\Requests\CreateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\DeleteCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\GetAllCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\FindCategoriesByIdRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\UpdateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\StoreCategoriesRequest;
use App\Containers\AppSection\Categories\UI\WEB\Requests\EditCategoriesRequest;
use App\Containers\AppSection\Categories\Actions\CreateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\FindCategoriesByIdAction;
use App\Containers\AppSection\Categories\Actions\GetAllCategoriesAction;
use App\Containers\AppSection\Categories\Actions\UpdateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\DeleteCategoriesAction;

class CategoriesController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        view()->share('listStatus', EnumBase::LIST_STATUS);
    }
    public function index(GetAllCategoriesRequest $request, GetAllCategoriesAction $action)
    {
        $categories = $action->setConditions($request->all())->run($request->hasPagination ?? true, $request->limit ?? 10);
        return view('appSection@categories::index', [
            'categories' => $categories
        ]);
    }

    public function show(FindCategoriesByIdRequest $request)
    {
        $categories = app(FindCategoriesByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateCategoriesRequest $request)
    {
        // ..
    }

    public function store(StoreCategoriesRequest $request)
    {
        $categories = app(CreateCategoriesAction::class)->run($request);
        // ..
    }

    public function edit(EditCategoriesRequest $request)
    {
        $categories = app(FindCategoriesByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateCategoriesRequest $request)
    {
        $categories = app(UpdateCategoriesAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteCategoriesRequest $request)
    {
         $result = app(DeleteCategoriesAction::class)->run($request);
         // ..
    }
}
