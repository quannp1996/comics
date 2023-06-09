<?php

namespace App\Containers\AppSection\Base\Tasks;

use App\Containers\AppSection\Base\Data\Repositories\BaseRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBasesTask extends Task
{
    protected BaseRepository $repository;

    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
