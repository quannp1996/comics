<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\SyncMangaDescriptionTask;
use App\Containers\AppSection\Manga\Tasks\UpdateMangaTask;
use App\Ship\Parents\Actions\Action;
use Illuminate\Support\Arr;

class UpdateMangaAction extends Action
{
    public function run(int $mangaID, array $allData): Manga
    {
        $data = Arr::only($allData, ['status', 'author', 'is_hot', 'avatar']);
        $manga = app(UpdateMangaTask::class)->run($mangaID, $data);
        if ($mangaDesc = @$allData['manga_description']) {
            foreach ($mangaDesc as $key => &$desc) {
                $desc['language_id'] = $key;
                $desc['manga_id'] = $manga->id;
            }
            app(SyncMangaDescriptionTask::class)->run($manga->id, $mangaDesc);
        }
        if (!empty($allData['categories'])) $manga->categories()->sync($allData['categories']);
        if (!empty($allData['tags'])) $manga->tags()->sync($allData['tags']);
        return $manga;
    }
}
