<?php

namespace App\Containers\AppSection\Tag\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class TagRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
