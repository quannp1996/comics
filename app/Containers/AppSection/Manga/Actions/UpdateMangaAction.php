<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\UpdateMangaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateMangaAction extends Action
{
    public function run(Request $request): Manga
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateMangaTask::class)->run($request->id, $data);
    }
}
