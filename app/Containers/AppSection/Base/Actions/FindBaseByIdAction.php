<?php

namespace App\Containers\AppSection\Base\Actions;

use App\Containers\AppSection\Base\Models\Base;
use App\Containers\AppSection\Base\Tasks\FindBaseByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBaseByIdAction extends Action
{
    public function run(Request $request): Base
    {
        return app(FindBaseByIdTask::class)->run($request->id);
    }
}
