<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Comment\Tasks\UpdateCommentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCommentAction extends Action
{
    public function run(Request $request): Comment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateCommentTask::class)->run($request->id, $data);
    }
}
