<?php

namespace App\Containers\AppSection\Comment\UI\API\Controllers;

use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Comment\UI\API\Requests\GetAllCommentsRequest;
use App\Containers\AppSection\Comment\UI\API\Transformers\CommentTransformer;
use App\Containers\AppSection\Comment\Actions\CreateCommentAction;
use App\Containers\AppSection\Comment\Actions\GetAllCommentsAction;
use App\Containers\AppSection\Comment\Models\Comment;
use App\Containers\AppSection\Comment\UI\API\Requests\PostMangaCommentRequest;
use App\Ship\Events\PusherCommentMangaNotication;
use App\Ship\Parents\Controllers\ApiController;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rules\Enum;

class CommentController extends ApiController
{
    public function postComment(PostMangaCommentRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try{
            $comment = app(CreateCommentAction::class)->run($request->merge([
                'type' => Comment::class,
                'status' => EnumBase::ENABLE_STATUS,
                'user_id' => 0
            ])->all());
            DB::commit();
            event(new PusherCommentMangaNotication(json_encode([
                'name' => $comment->name,
                'email' => $comment->email,
                'content' => $comment->content
            ]), $request->object_id));
            return response()->json([
                'success' => true
            ]);
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function getAllComments(GetAllCommentsRequest $request): array
    {
        $comments = app(GetAllCommentsAction::class)->run(true, 10);
        return $this->transform($comments, CommentTransformer::class);
    }

}
