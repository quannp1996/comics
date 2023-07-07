<?php

namespace App\Containers\AppSection\Manga\Tasks;

use App\Containers\AppSection\Manga\Data\Repositories\MangaDescriptionRepository;
use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Core\AbstractClass\ListTask;

class SyncMangaDescriptionTask
{
    protected $repository;
    public function __construct(MangaDescriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(int $mangaID, array $data)
    {
        $this->repository->where('manga_id', $mangaID)->delete();
        $this->repository->insert($data);
    }
}
