<?php

namespace App\Containers\AppSection\Tag\UI\API\Transformers;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Ship\Parents\Transformers\Transformer;

class TagTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Tag $tag): array
    {
        $response = [
            'object' => $tag->getResourceKey(),
            'id' => $tag->getHashedKey(),
            'created_at' => $tag->created_at,
            'updated_at' => $tag->updated_at,
            'readable_created_at' => $tag->created_at->diffForHumans(),
            'readable_updated_at' => $tag->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $tag->id,
            // 'deleted_at' => $tag->deleted_at,
        ], $response);
    }
}
