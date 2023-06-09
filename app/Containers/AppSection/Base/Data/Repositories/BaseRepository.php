<?php

namespace App\Containers\AppSection\Base\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BaseRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
