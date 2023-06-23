<?php

namespace App\Containers\AppSection\Manga\Tasks;

use App\Containers\AppSection\Manga\Data\Repositories\MangaRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMangaTask extends Task
{
    protected MangaRepository $repository;

    public function __construct(MangaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception->getMessage());
        }
    }
}
