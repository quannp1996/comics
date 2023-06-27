<?php

namespace App\Containers\AppSection\Manga\Models;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Containers\AppSection\Tag\Models\Tag;
use App\Ship\Core\Traits\Model\TraitHtmlModel;
use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manga extends Model
{
    use TraitHtmlModel;
    use SoftDeletes;
    protected $fillable = [
        'status',
        'is_hot',
        'author',
        'avatar',
        'views',
        'type',
        'cost_reading'
    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [];

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
        return $this->belongsToMany(Categories::class, 'manga_categories', 'manga_id', 'category_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'manga_tags', 'tag_id', 'manga_id');
    }

    public function chapters(): HasMany
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

    public function getImageURL()
    {
        if (filter_var($this->avatar, FILTER_VALIDATE_URL)) return $this->avatar;
        return asset('upload/manga/' . $this->avatar);
    }

    protected string $resourceKey = 'Manga';
}
