<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Containers\AppSection\Tag\Tasks\UpdateTagTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateTagAction extends Action
{
    public function run(Request $request): Tag
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateTagTask::class)->run($request->id, $data);
    }
}
