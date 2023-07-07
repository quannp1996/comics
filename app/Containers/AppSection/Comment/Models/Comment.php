<?php

namespace App\Containers\AppSection\Comment\Models;

use App\Ship\Parents\Models\Model;

class Comment extends Model
{
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

    public function replies()
    {
        return $this->hasMany(self::class, 'reply_id', 'id');
    }
    protected string $resourceKey = 'Comment';
}
