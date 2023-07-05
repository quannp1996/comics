<?php

namespace App\Containers\AppSection\Tag\Models;

use App\Containers\AppSection\Tag\Enums\EnumTag;
use App\Ship\Core\Traits\Model\TraitHtmlModel;
use App\Ship\Parents\Models\Model;

class Tag extends Model
{
    use TraitHtmlModel;
    protected $fillable = ['title', 'type', 'status', 'color'];

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

    public function getTypeText(): string
    {
        return in_array($this->type, [EnumTag::TYPE_COMMIC, EnumTag::TYPE_NEW]) ? EnumTag::TYPE_TEXT[$this->type] : EnumTag::TEXT_COMMIC;
    }
    protected string $resourceKey = 'Tag';
}
