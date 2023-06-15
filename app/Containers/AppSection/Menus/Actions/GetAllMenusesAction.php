<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Tasks\GetAllMenusesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllMenusesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllMenusesTask::class)->addRequestCriteria()->run();
    }
}
