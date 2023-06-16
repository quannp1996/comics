<?php

namespace App\Containers\AppSection\Tag\UI\API\Controllers;

use App\Containers\AppSection\Tag\UI\API\Requests\CreateTagRequest;
use App\Containers\AppSection\Tag\UI\API\Requests\DeleteTagRequest;
use App\Containers\AppSection\Tag\UI\API\Requests\GetAllTagsRequest;
use App\Containers\AppSection\Tag\UI\API\Requests\FindTagByIdRequest;
use App\Containers\AppSection\Tag\UI\API\Requests\UpdateTagRequest;
use App\Containers\AppSection\Tag\UI\API\Transformers\TagTransformer;
use App\Containers\AppSection\Tag\Actions\CreateTagAction;
use App\Containers\AppSection\Tag\Actions\FindTagByIdAction;
use App\Containers\AppSection\Tag\Actions\GetAllTagsAction;
use App\Containers\AppSection\Tag\Actions\UpdateTagAction;
use App\Containers\AppSection\Tag\Actions\DeleteTagAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createTag(CreateTagRequest $request): JsonResponse
    {
        $tag = app(CreateTagAction::class)->run($request);
        return $this->created($this->transform($tag, TagTransformer::class));
    }

    public function findTagById(FindTagByIdRequest $request): array
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        return $this->transform($tag, TagTransformer::class);
    }

    public function getAllTags(GetAllTagsRequest $request): array
    {
        $tags = app(GetAllTagsAction::class)->run($request);
        return $this->transform($tags, TagTransformer::class);
    }

    public function updateTag(UpdateTagRequest $request): array
    {
        $tag = app(UpdateTagAction::class)->run($request);
        return $this->transform($tag, TagTransformer::class);
    }

    public function deleteTag(DeleteTagRequest $request): JsonResponse
    {
        app(DeleteTagAction::class)->run($request);
        return $this->noContent();
    }
}
