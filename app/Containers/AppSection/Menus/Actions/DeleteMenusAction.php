<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Tasks\DeleteMenusTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteMenusAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteMenusTask::class)->run($request->id);
    }
}
