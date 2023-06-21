<?php

namespace App\Containers\AppSection\Categories\Tasks;

use App\Containers\AppSection\Categories\Data\Repositories\CategoriesRepository;
use App\Ship\Core\AbstractClass\ListTask;
use App\Ship\Core\Interfaces\IGetListTask;

class GetAllCategoriesTask extends ListTask
{

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
        $this->equalFields = ['status', 'type'];
    }

    public function run(bool $hasPagination, int $limit): iterable
    {
        return $this->repository->paginate();
    }

    public function buildConditions(array $conditions = []): IGetListTask
    {
        parent::buildConditions($conditions);
        return $this;
    }
}
