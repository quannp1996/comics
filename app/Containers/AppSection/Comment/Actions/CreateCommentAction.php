<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Comment\Tasks\CreateCommentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCommentAction extends Action
{
    public function run(Request $request): Comment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateCommentTask::class)->run($data);
    }
}
