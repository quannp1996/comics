<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Tasks\GetAllMangasTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllMangasAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllMangasTask::class)->addRequestCriteria()->run();
    }
}
