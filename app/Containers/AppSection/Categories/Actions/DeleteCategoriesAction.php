<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Tasks\DeleteCategoriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteCategoriesAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteCategoriesTask::class)->run($request->id);
    }
}
