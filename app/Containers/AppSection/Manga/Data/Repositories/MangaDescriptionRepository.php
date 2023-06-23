<?php

namespace App\Containers\AppSection\Manga\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class MangaDescriptionRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
