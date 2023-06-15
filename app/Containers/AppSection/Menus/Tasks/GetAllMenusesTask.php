<?php

namespace App\Containers\AppSection\Menus\Tasks;

use App\Containers\AppSection\Menus\Data\Repositories\MenusRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMenusesTask extends Task
{
    protected MenusRepository $repository;

    public function __construct(MenusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
