<?php

namespace App\Containers\AppSection\Manga\Tasks;

use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMangasTask extends Task
{
    protected MangaRepository $repository;

    public function __construct(MangaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
