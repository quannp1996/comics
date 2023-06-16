<?php

namespace App\Containers\AppSection\Tag\UI\WEB\Controllers;

use App\Containers\AppSection\Tag\UI\WEB\Requests\CreateTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\DeleteTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\GetAllTagsRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\FindTagByIdRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\UpdateTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\StoreTagRequest;
use App\Containers\AppSection\Tag\UI\WEB\Requests\EditTagRequest;
use App\Containers\AppSection\Tag\Actions\CreateTagAction;
use App\Containers\AppSection\Tag\Actions\FindTagByIdAction;
use App\Containers\AppSection\Tag\Actions\GetAllTagsAction;
use App\Containers\AppSection\Tag\Actions\UpdateTagAction;
use App\Containers\AppSection\Tag\Actions\DeleteTagAction;
use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function index(GetAllTagsRequest $request)
    {
        $tags = app(GetAllTagsAction::class)->run($request);
        // ..
    }

    public function show(FindTagByIdRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateTagRequest $request)
    {
        // ..
    }

    public function store(StoreTagRequest $request)
    {
        $tag = app(CreateTagAction::class)->run($request);
        // ..
    }

    public function edit(EditTagRequest $request)
    {
        $tag = app(FindTagByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateTagRequest $request)
    {
        $tag = app(UpdateTagAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteTagRequest $request)
    {
         $result = app(DeleteTagAction::class)->run($request);
         // ..
    }
}
