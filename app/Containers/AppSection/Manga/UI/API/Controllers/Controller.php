<?php

namespace App\Containers\AppSection\Manga\UI\API\Controllers;

use App\Containers\AppSection\Manga\UI\API\Requests\CreateMangaRequest;
use App\Containers\AppSection\Manga\UI\API\Requests\DeleteMangaRequest;
use App\Containers\AppSection\Manga\UI\API\Requests\GetAllMangasRequest;
use App\Containers\AppSection\Manga\UI\API\Requests\FindMangaByIdRequest;
use App\Containers\AppSection\Manga\UI\API\Requests\UpdateMangaRequest;
use App\Containers\AppSection\Manga\UI\API\Transformers\MangaTransformer;
use App\Containers\AppSection\Manga\Actions\CreateMangaAction;
use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;
use App\Containers\AppSection\Manga\Actions\GetAllMangasAction;
use App\Containers\AppSection\Manga\Actions\UpdateMangaAction;
use App\Containers\AppSection\Manga\Actions\DeleteMangaAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createManga(CreateMangaRequest $request): JsonResponse
    {
        $manga = app(CreateMangaAction::class)->run($request);
        return $this->created($this->transform($manga, MangaTransformer::class));
    }

    public function findMangaById(FindMangaByIdRequest $request): array
    {
        $manga = app(FindMangaByIdAction::class)->run($request);
        return $this->transform($manga, MangaTransformer::class);
    }

    public function getAllMangas(GetAllMangasRequest $request): array
    {
        $mangas = app(GetAllMangasAction::class)->run($request);
        return $this->transform($mangas, MangaTransformer::class);
    }

    public function updateManga(UpdateMangaRequest $request): array
    {
        $manga = app(UpdateMangaAction::class)->run($request);
        return $this->transform($manga, MangaTransformer::class);
    }

    public function deleteManga(DeleteMangaRequest $request): JsonResponse
    {
        app(DeleteMangaAction::class)->run($request);
        return $this->noContent();
    }
}
