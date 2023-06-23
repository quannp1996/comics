<?php

namespace App\Containers\AppSection\Manga\Actions;

use App\Containers\AppSection\Manga\Models\Manga;
use App\Containers\AppSection\Manga\Tasks\CreateMangaTask;
use App\Containers\AppSection\Manga\Tasks\SyncMangaDescriptionTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Arr;

class CreateMangaAction extends Action
{
    public function run(array $inputData): Manga
    {
        $data = Arr::only($inputData, [
            'status', 'avatar', 'is_hot', 'author'
        ]);
        $manga = app(CreateMangaTask::class)->run($data);
        if ($categories = @$inputData['categories'] ?? []) $manga->categories()->sync($categories);
        if ($tags = @$inputData['tags'] ?? []) $manga->tags()->sync($tags);
        if ($descriptions = $inputData['manga_description']) {
            foreach ($descriptions as $key => &$description) {
                $description['language_id'] = $key;
                $description['manga_id'] = $manga->id;
            }
            app(SyncMangaDescriptionTask::class)->run($manga->id, $description);
        }
        return $manga;
    }
}
