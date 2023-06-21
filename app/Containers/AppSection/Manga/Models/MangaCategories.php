<?php

namespace App\Containers\AppSection\Manga\Models;

use App\Ship\Parents\Models\Model;

class MangaCategories extends Model
{
    public $table = 'manga_categories';
    protected $fillable = [

    ];

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
    protected string $resourceKey = 'Manga';
}
