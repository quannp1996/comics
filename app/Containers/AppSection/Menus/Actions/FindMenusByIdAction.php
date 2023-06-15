<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Models\Menus;
use App\Containers\AppSection\Menus\Tasks\FindMenusByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindMenusByIdAction extends Action
{
    public function run(Request $request): Menus
    {
        return app(FindMenusByIdTask::class)->run($request->id);
    }
}
