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
}
