<?php

namespace App\Containers\AppSection\Tag\Models;

use App\Ship\Core\Traits\Model\TraitHtmlModel;
use App\Ship\Parents\Models\Model;

class Tag extends Model
{
    use TraitHtmlModel;
    protected $fillable = ['title', 'type', 'status', 'color'];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Tag';
}
