<?php

namespace App\Containers\AppSection\Manga\UI\API\Transformers;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Ship\Parents\Transformers\Transformer;

class MangaTransformer extends Transformer
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

    public function transform(Manga $manga): array
    {
        $response = [
            'object' => $manga->getResourceKey(),
            'id' => $manga->getHashedKey(),
            'created_at' => $manga->created_at,
            'updated_at' => $manga->updated_at,
            'readable_created_at' => $manga->created_at->diffForHumans(),
            'readable_updated_at' => $manga->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $manga->id,
            // 'deleted_at' => $manga->deleted_at,
        ], $response);
    }
}
