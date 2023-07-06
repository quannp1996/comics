<?php

namespace App\Containers\AppSection\FrontEnd\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseFrontEndController;
use App\Containers\AppSection\FrontEnd\UI\WEB\Requests\DetailMangaRequest;
use App\Containers\AppSection\Manga\Actions\FindMangaByIdAction;

class MangaController extends BaseFrontEndController
{

    public function detail(DetailMangaRequest $request, FindMangaByIdAction $action)
    {
        $manga = $action->setWithData(['chapters'])->run($request->id);
        return $this->show('pages.manga.detail', [
            'manga' => $manga
        ]);
    }
}
;