<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\FindMangaByIdTask;
use App\Ship\Core\AbstractClass\ListAction;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindMangaByIdAction extends Action
{
    protected FindMangaByIdTask $task;

    public function __construct(FindMangaByIdTask $task)
    {
        parent::__construct();
        $this->task = $task;
    }
    public function run(int $mangaID): Manga
    {
        return $this->task->run($mangaID);
    }
    
}
