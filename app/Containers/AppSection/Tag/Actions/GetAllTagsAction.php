<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Tasks\GetAllTagsTask;
use App\Ship\Core\AbstractClass\ListAction;

class GetAllTagsAction extends ListAction
{
    public function __construct(GetAllTagsTask $task)
    {
        parent::__construct($task);
    }
}
