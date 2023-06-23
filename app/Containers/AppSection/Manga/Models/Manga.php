<?php

namespace App\Containers\AppSection\Manga\Models;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Tag\Models\Tag;
use App\Ship\Core\Traits\Model\TraitHtmlModel;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Manga extends Model
{
    use TraitHtmlModel;
    protected $fillable = [
        'status',
        'is_hot',
        'author',
        'avatar',
        'views',
        'type',
        'cost_reading'
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
        'time_clone'
    ];

    /**
     * A resource key to be used in the serialized responses.
     */

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'manga_categories', 'category_id', 'manga_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'manga_tags', 'tag_id', 'manga_id');
    }

    public function chapter(): HasMany
    {
        return $this->hasMany(Chapter::class, 'manga_id', 'id');
    }

    public function desc(): HasOne
    {
        return $this->hasOne(MangaDescription::class, 'manga_id', 'id');
    }

    public function all_desc(): HasMany
    {
        return $this->hasMany(MangaDescription::class, 'manga_id', 'id');
    }
    protected string $resourceKey = 'Manga';
}
