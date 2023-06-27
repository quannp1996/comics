<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\FindMangaByIdTask;
use App\Ship\Core\AbstractClass\FindAction;

class FindMangaByIdAction extends FindAction
{
   
    public function __construct(FindMangaByIdTask $task)
    {
        parent::__construct($task);
        $this->task = $task;
        $this->withCount = [];
        $this->withData = [];
    }
}
