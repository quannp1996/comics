<?php

namespace App\Ship\Core\AbstractClass;

use App\Ship\Core\Traits\WithDataTrait;
use App\Ship\Parents\Repositories\Repository;
use App\Ship\Parents\Tasks\Task;

abstract class FindTask extends Task
{
    use WithDataTrait;
    protected Repository $repository;
    public function run(int $id)
    {
        return $this->repository->find($id);
    }
}
