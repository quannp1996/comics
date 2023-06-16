<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Containers\AppSection\Tag\Tasks\FindTagByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindTagByIdAction extends Action
{
    public function run(Request $request): Tag
    {
        return app(FindTagByIdTask::class)->run($request->id);
    }
}
