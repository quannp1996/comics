<?php

namespace App\Containers\AppSection\Comment\Tasks;

use App\Containers\AppSection\Comment\Data\Repositories\CommentRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllCommentsTask extends ListTask
{
    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
        $this->equalFields = ['status', 'reply_id', 'object_id', 'type'];
    }
}
