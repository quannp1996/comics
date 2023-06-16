<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Tasks\GetAllTagsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllTagsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllTagsTask::class)->addRequestCriteria()->run();
    }
}
