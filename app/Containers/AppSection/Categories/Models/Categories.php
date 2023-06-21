<?php

namespace App\Containers\AppSection\Categories\Models;

use App\Containers\AppSection\Categories\Enums\EnumCategory;
use App\Containers\AppSection\Manga\Models\Manga;
use App\Ship\Core\Traits\Model\TraitHtmlModel;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    use TraitHtmlModel;

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

    public function manages(): BelongsToMany
    {
        return $this->belongsToMany(Manga::class, 'manga_categories', 'manga_id', 'category_id');
    }

    protected string $resourceKey = 'Categories';
    
}
