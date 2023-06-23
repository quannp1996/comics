<?php

namespace App\Containers\AppSection\Manga\UI\WEB\Controllers;

use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;
use App\Containers\AppSection\Manga\Actions\GetAllChapterByMangaAction;
use App\Containers\AppSection\Manga\UI\WEB\Requests\GetAllChaptersByMangasRequest;

trait TraitChapter
{

    public function chapters(GetAllChaptersByMangasRequest $request, GetAllChapterByMangaAction $action)
    {
        $manga = app(FindMangaByIdAction::class)->setwithData(['desc'])->run($request->manga_id);
        $this->breadcrumb->setTitle('Danh sách Chương')->setList([
            [
                'lable' => 'Trang chủ',
                'href' => '#'
            ],
            [
                'lable' => 'Trang chủ',
                'href' => '#'
            ],
            [
                'lable' => 'Trang chủ',
                'href' => '#'
            ]
        ]);
        $chapters = $action->setConditions([
            'mnaga_id' => $request->manga_id
        ])->run($request->hasPagination ?? true, $request->limit ?? 1000);

        return view('appSection@manga::chapters', [
            'chapters' => $chapters
        ]);
    }
}
