<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Categories\Tasks\CreateCategoriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCategoriesAction extends Action
{
    public function run(Request $request): Categories
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCategoriesTask::class)->run($data);
    }
}
