<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Containers\AppSection\Tag\Tasks\CreateTagTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateTagAction extends Action
{
    public function run(Request $request): Tag
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateTagTask::class)->run($data);
    }
}
