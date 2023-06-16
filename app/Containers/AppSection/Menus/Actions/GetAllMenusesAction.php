<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Tasks\GetAllMenusesTask;
use App\Ship\Core\AbstractClass\ListAction;

class GetAllMenusesAction extends ListAction
{
    protected GetAllMenusesTask $task;

    public function __construct(GetAllMenusesTask $task)
    {
        $this->task = $task;
    }
}
