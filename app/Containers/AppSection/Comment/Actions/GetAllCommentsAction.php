<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Tasks\GetAllCommentsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllCommentsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllCommentsTask::class)->addRequestCriteria()->run();
    }
}
