<?php

namespace App\Containers\AppSection\Manga\Tasks\Chapters;

use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllChaptersByMangaTask extends ListTask
{
    public function __construct(MangaRepository $repository)
    {
        $this->repository = $repository;
        $this->equalFields = ['manga_id', 'status'];
    }
}
