<?php

namespace App\Containers\AppSection\Base\Actions;

use App\Containers\AppSection\Base\Tasks\DeleteBaseTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBaseAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBaseTask::class)->run($request->id);
    }
}
