<?php

namespace App\Containers\AppSection\Menus\UI\API\Transformers;

use App\Containers\AppSection\Menus\Models\Menus;
use App\Ship\Parents\Transformers\Transformer;

class MenusTransformer extends Transformer
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

    public function transform(Menus $menus): array
    {
        $response = [
            'object' => $menus->getResourceKey(),
            'id' => $menus->getHashedKey(),
            'created_at' => $menus->created_at,
            'updated_at' => $menus->updated_at,
            'readable_created_at' => $menus->created_at->diffForHumans(),
            'readable_updated_at' => $menus->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $menus->id,
            // 'deleted_at' => $menus->deleted_at,
        ], $response);
    }
}
