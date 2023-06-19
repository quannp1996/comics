<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Categories\Tasks\CreateCategoriesTask;
use App\Containers\AppSection\Categories\Tasks\SyncCategoriesDescriptionTask;
use App\Ship\Parents\Actions\Action;

class CreateCategoriesAction extends Action
{
    public function run(array $data): Categories
    {
        $category = app(CreateCategoriesTask::class)->run($data);
        $categoryDesc = $data['category_description'];
        app(SyncCategoriesDescriptionTask::class)->run($category->id, $categoryDesc);
        return $category;
    }
}
