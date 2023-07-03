<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\UpdateMangaTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Arr;

class UpdateMangaAction extends Action
{
    public function run(int $mangaID, array $allData): Manga
    {
        $data = Arr::only($allData, ['status', 'author', 'is_hot', 'avatar']);
        $manga = app(UpdateMangaTask::class)->run($mangaID, $data);
        if(!empty($allData['categories'])) $manga->categories()->sync($allData['categories']);
        if(!empty($allData['tags'])) $manga->tags()->sync($allData['tags']);
        return $manga;
    }
}
