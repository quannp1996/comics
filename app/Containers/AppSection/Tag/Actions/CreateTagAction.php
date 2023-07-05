<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Models\Tag;
use App\Containers\AppSection\Tag\Tasks\CreateTagTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Exception;
use Illuminate\Support\Arr;

class CreateTagAction extends Action
{
    public function run(array $requestData = []): Tag
    {
        $data = Arr::only($requestData, [
            'title', 'type', 'status', 'color'
        ]);
        return app(CreateTagTask::class)->run($data);
    }
}
