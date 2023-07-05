<?php

namespace App\Containers\AppSection\Tag\Tasks;

use App\Containers\AppSection\Tag\Data\Repositories\TagRepository;
use App\Ship\Core\AbstractClass\ListTask;
use App\Ship\Parents\Tasks\Task;

class GetAllTagsTask extends ListTask
{
    public function __construct(TagRepository $repository)
    {
        $this->repository = $repository;
    }
}
