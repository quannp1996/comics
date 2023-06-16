<?php

namespace App\Containers\AppSection\Categories\Tasks;

use App\Containers\AppSection\Categories\Data\Repositories\CategoriesRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllCategoriesTask extends ListTask
{

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(bool $hasPagination, int $limit): iterable
    {
        return $this->repository->paginate();
    }
}
