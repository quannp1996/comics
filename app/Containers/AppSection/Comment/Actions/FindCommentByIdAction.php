<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Comment\Tasks\FindCommentByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindCommentByIdAction extends Action
{
    public function run(Request $request): Comment
    {
        return app(FindCommentByIdTask::class)->run($request->id);
    }
}
