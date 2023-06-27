<?php

namespace App\Containers\AppSection\Manga\Tasks\Chapters;

use App\Containers\AppSection\Manga\Data\Repositories\ChapterRepository;
use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllChaptersByMangaTask extends ListTask
{
    public function __construct(ChapterRepository $repository)
    {
        $this->repository = $repository;
        $this->equalFields = ['manga_id', 'status'];
    }

    public function run(bool $hasPagination, int $limit): iterable
    {
        return $this->repository->with(['avatar', 'images'])->orderBy('id', 'desc')->paginate($limit);
    }
}
