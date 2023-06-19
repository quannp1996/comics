<?php

namespace App\Containers\AppSection\Categories\Models;

use App\Ship\Parents\Models\Model;

class CategoriesDescription extends Model
{
    public $table = 'category_description';

    protected $fillable = [
        'language_id', 'title', 'description', 'meta_keyword', 'meta_title', 'meta_description'
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Categories';
}
