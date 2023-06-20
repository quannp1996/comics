<?php

namespace App\Containers\AppSection\Categories\Models;

use App\Containers\AppSection\Categories\Enums\EnumCategory;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Categories extends Model
{
    protected $fillable = [
        'status', 'pid', 'is_hot', 'avatar', 'type'
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

    public function desc(): HasOne
    {
        return $this->hasOne(CategoriesDescription::class, 'category_id', 'id');
    }

    public function all_desc(): HasMany
    {
        return $this->hasMany(CategoriesDescription::class, 'category_id', 'id');
    }
    /**
     * A resource key to be used in the serialized responses.
     */

    public function getType()
    {
        return @EnumCategory::LIST_TYPES[$this->type];
    }

    protected string $resourceKey = 'Categories';
    
}
