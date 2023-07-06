<?php

namespace App\Containers\AppSection\FrontEnd\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseFrontEndController;
use App\Containers\AppSection\FrontEnd\UI\WEB\Requests\DetailMangaRequest;

class MangaController extends BaseFrontEndController
{

    public function detail(DetailMangaRequest $request)
    {
        dd($request->all());
        return $this->show('pages.home.index');
    }
}
