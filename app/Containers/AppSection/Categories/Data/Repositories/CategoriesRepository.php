<?php

namespace App\Containers\AppSection\Categories\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CategoriesRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
