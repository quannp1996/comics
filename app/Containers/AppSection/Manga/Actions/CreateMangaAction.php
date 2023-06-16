<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\CreateMangaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateMangaAction extends Action
{
    public function run(Request $request): Manga
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateMangaTask::class)->run($data);
    }
}
