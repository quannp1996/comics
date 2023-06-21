<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Categories\Tasks\SyncCategoriesDescriptionTask;
use App\Containers\AppSection\Categories\Tasks\UpdateCategoriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCategoriesAction extends Action
{
    public function run(int $categoryID, array $data): Categories
    {
        $category = app(UpdateCategoriesTask::class)->run($categoryID, $data);
        $categoryDesc = $data['category_description'];
        foreach ($categoryDesc as $key => &$desc) {
            $desc['language_id'] = $key;
            $desc['category_id'] = $category->id;
        }
        app(SyncCategoriesDescriptionTask::class)->run($category->id, $categoryDesc);
        return $category;
    }
}
