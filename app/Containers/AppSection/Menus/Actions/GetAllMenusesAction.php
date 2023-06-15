<?php

namespace App\Containers\AppSection\Menus\Actions;

use App\Containers\AppSection\Menus\Tasks\GetAllMenusesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllMenusesAction extends Action
{
    protected GetAllMenusesTask $task;

    public function __construct(GetAllMenusesTask $task)
    {
        $this->task = $task;
    }

    public function run(array $conditions = [])
    {
        return $this->task->run(true, 1);
    }
}
