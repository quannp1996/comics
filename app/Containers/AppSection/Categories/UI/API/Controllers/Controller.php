<?php

namespace App\Containers\AppSection\Categories\UI\API\Controllers;

use App\Containers\AppSection\Categories\UI\API\Requests\CreateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\API\Requests\DeleteCategoriesRequest;
use App\Containers\AppSection\Categories\UI\API\Requests\GetAllCategoriesRequest;
use App\Containers\AppSection\Categories\UI\API\Requests\FindCategoriesByIdRequest;
use App\Containers\AppSection\Categories\UI\API\Requests\UpdateCategoriesRequest;
use App\Containers\AppSection\Categories\UI\API\Transformers\CategoriesTransformer;
use App\Containers\AppSection\Categories\Actions\CreateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\FindCategoriesByIdAction;
use App\Containers\AppSection\Categories\Actions\GetAllCategoriesAction;
use App\Containers\AppSection\Categories\Actions\UpdateCategoriesAction;
use App\Containers\AppSection\Categories\Actions\DeleteCategoriesAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createCategories(CreateCategoriesRequest $request): JsonResponse
    {
        $categories = app(CreateCategoriesAction::class)->run($request);
        return $this->created($this->transform($categories, CategoriesTransformer::class));
    }

    public function findCategoriesById(FindCategoriesByIdRequest $request): array
    {
        $categories = app(FindCategoriesByIdAction::class)->run($request);
        return $this->transform($categories, CategoriesTransformer::class);
    }

    public function getAllCategories(GetAllCategoriesRequest $request): array
    {
        $categories = app(GetAllCategoriesAction::class)->run($request);
        return $this->transform($categories, CategoriesTransformer::class);
    }

    public function updateCategories(UpdateCategoriesRequest $request): array
    {
        $categories = app(UpdateCategoriesAction::class)->run($request);
        return $this->transform($categories, CategoriesTransformer::class);
    }

    public function deleteCategories(DeleteCategoriesRequest $request): JsonResponse
    {
        app(DeleteCategoriesAction::class)->run($request);
        return $this->noContent();
    }
}
