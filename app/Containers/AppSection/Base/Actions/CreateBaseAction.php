<?php

namespace App\Containers\AppSection\Base\Actions;

use App\Containers\AppSection\Base\Models\Base;
use App\Containers\AppSection\Base\Tasks\CreateBaseTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBaseAction extends Action
{
    public function run(Request $request): Base
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBaseTask::class)->run($data);
    }
}
