<?php

namespace App\Containers\AppSection\Comment\UI\API\Controllers;

use App\Containers\AppSection\Comment\UI\API\Requests\CreateCommentRequest;
use App\Containers\AppSection\Comment\UI\API\Requests\DeleteCommentRequest;
use App\Containers\AppSection\Comment\UI\API\Requests\GetAllCommentsRequest;
use App\Containers\AppSection\Comment\UI\API\Requests\FindCommentByIdRequest;
use App\Containers\AppSection\Comment\UI\API\Requests\UpdateCommentRequest;
use App\Containers\AppSection\Comment\UI\API\Transformers\CommentTransformer;
use App\Containers\AppSection\Comment\Actions\CreateCommentAction;
use App\Containers\AppSection\Comment\Actions\FindCommentByIdAction;
use App\Containers\AppSection\Comment\Actions\GetAllCommentsAction;
use App\Containers\AppSection\Comment\Actions\UpdateCommentAction;
use App\Containers\AppSection\Comment\Actions\DeleteCommentAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createComment(CreateCommentRequest $request): JsonResponse
    {
        $comment = app(CreateCommentAction::class)->run($request);
        return $this->created($this->transform($comment, CommentTransformer::class));
    }

    public function findCommentById(FindCommentByIdRequest $request): array
    {
        $comment = app(FindCommentByIdAction::class)->run($request);
        return $this->transform($comment, CommentTransformer::class);
    }

    public function getAllComments(GetAllCommentsRequest $request): array
    {
        $comments = app(GetAllCommentsAction::class)->run($request);
        return $this->transform($comments, CommentTransformer::class);
    }

    public function updateComment(UpdateCommentRequest $request): array
    {
        $comment = app(UpdateCommentAction::class)->run($request);
        return $this->transform($comment, CommentTransformer::class);
    }

    public function deleteComment(DeleteCommentRequest $request): JsonResponse
    {
        app(DeleteCommentAction::class)->run($request);
        return $this->noContent();
    }
}
