<?php

namespace App\Containers\AppSection\Categories\UI\API\Transformers;

use App\Containers\AppSection\Categories\Models\Categories;
use App\Ship\Parents\Transformers\Transformer;

class CategoriesTransformer extends Transformer
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

    public function transform(Categories $categories): array
    {
        $response = [
            'object' => $categories->getResourceKey(),
            'id' => $categories->getHashedKey(),
            'created_at' => $categories->created_at,
            'updated_at' => $categories->updated_at,
            'readable_created_at' => $categories->created_at->diffForHumans(),
            'readable_updated_at' => $categories->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $categories->id,
            // 'deleted_at' => $categories->deleted_at,
        ], $response);
    }
}
