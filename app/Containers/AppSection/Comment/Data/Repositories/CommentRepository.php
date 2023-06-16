<?php

namespace App\Containers\AppSection\Comment\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CommentRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
