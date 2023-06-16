<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Tasks\DeleteMangaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteMangaAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteMangaTask::class)->run($request->id);
    }
}
