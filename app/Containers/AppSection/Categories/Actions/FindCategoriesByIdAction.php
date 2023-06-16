<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Categories\Tasks\FindCategoriesByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindCategoriesByIdAction extends Action
{
    public function run(Request $request): Categories
    {
        return app(FindCategoriesByIdTask::class)->run($request->id);
    }
}
