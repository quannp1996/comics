<?php

namespace App\Containers\AppSection\Menus\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class MenusRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
