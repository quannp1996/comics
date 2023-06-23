<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\FindMangaByIdTask;
use App\Ship\Core\AbstractClass\ListAction;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindMangaByIdAction extends Action
{
    public function run(int $mangaID): Manga
    {
        return app(FindMangaByIdTask::class)->run($mangaID);
    }
}
