<?php

namespace App\Containers\AppSection\Manga\UI\WEB\Controllers;

use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;
use App\Containers\AppSection\Manga\Actions\GetAllChapterByMangaAction;
use App\Containers\AppSection\Manga\UI\WEB\Requests\GetAllChaptersByMangasRequest;

trait TraitChapter
{

    public function chapters(GetAllChaptersByMangasRequest $request, GetAllChapterByMangaAction $action)
    {
        $manga = app(FindMangaByIdAction::class)->run($request->manga_id);
        $manga->load(['desc']);
        $this->breadcrumb->setTitle('Danh sách Chương')->setList([
            [
                'lable' => 'Danh sách Chương',
                'href' => '#'
            ],
            [
                'lable' => $manga->desc->title,
                'href' => '#'
            ],
            [
                'lable' => 'Trang chủ',
                'href' => '#'
            ]
        ]);
        $chapters = $action->setConditions([
            'manga_id' => $request->manga_id
        ])->run($request->hasPagination ?? true, $request->limit ?? 12);
        return view('appSection@manga::chapters', [
            'chapters' => $chapters,
            'manga' => $manga
        ]);
    }
}
