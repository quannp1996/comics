<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Tasks\DeleteCommentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteCommentAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteCommentTask::class)->run($request->id);
    }
}
