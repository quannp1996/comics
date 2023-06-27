<?php

namespace App\Containers\AppSection\Manga\Tasks;

use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Core\AbstractClass\FindTask;
use App\Ship\Core\Traits\WithDataTrait;

class FindMangaByIdTask extends FindTask
{
    use WithDataTrait;

    public function __construct(MangaRepository $repository)
    {
        $this->repository = $repository;
    }
}
