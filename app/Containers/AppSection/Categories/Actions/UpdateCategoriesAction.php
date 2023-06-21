<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Categories\Tasks\UpdateCategoriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCategoriesAction extends Action
{
    public function run(int $categoryID, array $data): Categories
    {
        return app(UpdateCategoriesTask::class)->run($categoryID, $data);
    }
}
