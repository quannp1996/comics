<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Containers\AppSection\Tag\Tasks\UpdateTagTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Illuminate\Support\Arr;

class UpdateTagAction extends Action
{
    public function run(int $id, array $requestData): Tag
    {
        $data = Arr::only($requestData, [
            'title', 'type', 'status', 'color'
        ]);

        return app(UpdateTagTask::class)->run($id, $data);
    }
}
