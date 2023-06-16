<?php

namespace App\Containers\AppSection\Menus\Tasks;

use App\Containers\AppSection\Menus\Data\Repositories\MenusRepository;
use App\Ship\Core\AbstractClass\ListTask;

class GetAllMenusesTask extends ListTask
{
    protected MenusRepository $repository;

    public function __construct(MenusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(bool $hasPagination, int $limit): iterable
    {
        if(!$hasPagination) return $this->repository->limit($limit)->get();
        return $this->repository->paginate($limit);
    }
}
