<?php

namespace App\Containers\AppSection\Menus\Tasks;

use App\Containers\AppSection\Menus\Data\Repositories\MenusRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindMenusByIdTask extends Task
{
    protected MenusRepository $repository;

    public function __construct(MenusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
