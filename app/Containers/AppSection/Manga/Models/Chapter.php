<?php

namespace App\Containers\AppSection\Manga\Models;

use App\Ship\Parents\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chapter extends Model
{
    public $table = 'chapters';
    protected $fillable = [];

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
    public function avatar(): HasOne
    {
        return $this->hasOne(ChapterImages::class, 'chapter_id', 'id')->orderBy('id', 'asc');
    }

    public function images(): HasMany
    {
        return $this->hasMany(ChapterImages::class, 'chapter_id', 'id')->orderBy('id', 'asc');
    }
    protected string $resourceKey = 'Manga';
}
