<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Comment\Tasks\CreateCommentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Arr;

class CreateCommentAction extends Action
{
    public function run(array $allData): Comment
    {
        $data = Arr::only($allData, [
            'name',
            'content',
            'email',
            'type',
            'object_id'
        ]);

        return app(CreateCommentTask::class)->run($data);
    }
}
