<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Tasks\GetAllMangasTask;
use App\Ship\Core\AbstractClass\ListAction;

class GetAllMangasAction extends ListAction
{
    public function __construct(GetAllMangasTask $task)
    {
        parent::__construct($task);
    }
}
