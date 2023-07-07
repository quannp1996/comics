<?php

namespace App\Containers\AppSection\Comment\Actions;

use App\Containers\AppSection\Comment\Tasks\GetAllCommentsTask;
use App\Ship\Core\AbstractClass\ListAction;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllCommentsAction extends ListAction
{
    public function __construct(GetAllCommentsTask $task)
    {
        parent::__construct($task);
    }
}
