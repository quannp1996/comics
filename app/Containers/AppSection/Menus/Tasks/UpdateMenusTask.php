<?php

namespace App\Containers\AppSection\Menus\Tasks;

use App\Containers\AppSection\Menus\Data\Repositories\MenusRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMenusTask extends Task
{
    protected MenusRepository $repository;

    public function __construct(MenusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
