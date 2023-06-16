<?php

namespace App\Containers\AppSection\Comment\UI\API\Transformers;

use App\Containers\AppSection\Comment\Models\Comment;
use App\Ship\Parents\Transformers\Transformer;

class CommentTransformer extends Transformer
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

    public function transform(Comment $comment): array
    {
        $response = [
            'object' => $comment->getResourceKey(),
            'id' => $comment->getHashedKey(),
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at,
            'readable_created_at' => $comment->created_at->diffForHumans(),
            'readable_updated_at' => $comment->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $comment->id,
            // 'deleted_at' => $comment->deleted_at,
        ], $response);
    }
}
