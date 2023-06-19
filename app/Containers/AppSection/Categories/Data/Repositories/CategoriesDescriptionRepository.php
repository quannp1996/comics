<?php

namespace App\Containers\AppSection\Categories\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CategoriesDescriptionRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
    ];
}
