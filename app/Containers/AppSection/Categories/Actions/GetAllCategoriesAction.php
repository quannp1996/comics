<?php

namespace App\Containers\AppSection\Categories\Actions;

use App\Containers\AppSection\Categories\Tasks\GetAllCategoriesTask;
use App\Ship\Core\AbstractClass\ListAction;

class GetAllCategoriesAction extends ListAction
{
    public function __construct(GetAllCategoriesTask $task)
    {
        parent::__construct($task);
        $this->task = $task;
    }
}
