<?php

namespace App\Containers\AppSection\Manga\Tasks;

use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllMangasTask extends ListTask
{
    public function __construct(MangaRepository $repository)
    {
        $this->repository = $repository;
        $this->equalFields = ['status'];
    }
}
