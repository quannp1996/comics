<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Models\Menus;
use App\Containers\AppSection\Menus\Tasks\UpdateMenusTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateMenusAction extends Action
{
    public function run(Request $request): Menus
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateMenusTask::class)->run($request->id, $data);
    }
}