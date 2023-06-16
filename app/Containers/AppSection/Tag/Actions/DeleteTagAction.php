<?php

namespace App\Containers\AppSection\Tag\Actions;

use App\Containers\AppSection\Tag\Tasks\DeleteTagTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteTagAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteTagTask::class)->run($request->id);
    }
}
