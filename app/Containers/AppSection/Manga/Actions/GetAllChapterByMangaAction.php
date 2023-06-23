<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Ship\Core\AbstractClass\ListAction;
use App\Containers\AppSection\Manga\Tasks\Chapters\GetAllChaptersByMangaTask;

class GetAllChapterByMangaAction extends ListAction
{
    public function __construct(GetAllChaptersByMangaTask $task)
    {
        parent::__construct($task);
    }
}
