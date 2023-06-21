<?php

namespace App\Containers\AppSection\Manga\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseAdminController;
use App\Containers\AppSection\Manga\UI\WEB\Requests\CreateMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\DeleteMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\GetAllMangasRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\FindMangaByIdRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\UpdateMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\StoreMangaRequest;
use App\Containers\AppSection\Manga\UI\WEB\Requests\EditMangaRequest;
use App\Containers\AppSection\Manga\Actions\CreateMangaAction;
use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;
use App\Containers\AppSection\Manga\Actions\GetAllMangasAction;
use App\Containers\AppSection\Manga\Actions\UpdateMangaAction;
use App\Containers\AppSection\Manga\Actions\DeleteMangaAction;

class MangesController extends BaseAdminController
{
    public function index(GetAllMangasRequest $request, GetAllMangasAction $action)
    {
        $mangas = $action->setConditions($request->all())->run($request->hasPagination ?? true, $request->limit ?? 10);
        return view('appSection@manga::index', [
            'mangas' => $mangas
        ]);
    }

    public function show(FindMangaByIdRequest $request)
    {
        $manga = app(FindMangaByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateMangaRequest $request)
    {
        // ..
    }

    public function store(StoreMangaRequest $request)
    {
        $manga = app(CreateMangaAction::class)->run($request);
        // ..
    }

    public function edit(EditMangaRequest $request)
    {
        $manga = app(FindMangaByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateMangaRequest $request)
    {
        $manga = app(UpdateMangaAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteMangaRequest $request)
    {
         $result = app(DeleteMangaAction::class)->run($request);
         // ..
    }
}
