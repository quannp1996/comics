<?php

namespace App\Containers\AppSection\Menus\Tasks;

use App\Containers\AppSection\Menus\Data\Repositories\MenusRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMenusTask extends Task
{
    protected MenusRepository $repository;

    public function __construct(MenusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
