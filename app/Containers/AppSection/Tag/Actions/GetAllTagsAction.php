<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Tasks\GetAllTagsTask;
use App\Ship\Core\AbstractClass\ListAction;
use App\Ship\Parents\Actions\Action;

class GetAllTagsAction extends ListAction
{
    public function __construct(GetAllTagsTask $task)
    {
        parent::__construct($task);
    }
}
