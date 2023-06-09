<?php

namespace App\Containers\AppSection\Base\Actions;

use App\Containers\AppSection\Base\Tasks\GetAllBasesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBasesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBasesTask::class)->addRequestCriteria()->run();
    }
}
