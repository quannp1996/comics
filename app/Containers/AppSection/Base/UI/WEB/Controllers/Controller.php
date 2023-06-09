<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Requests\CreateBaseRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\DeleteBaseRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\GetAllBasesRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\FindBaseByIdRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\UpdateBaseRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\StoreBaseRequest;
use App\Containers\AppSection\Base\UI\WEB\Requests\EditBaseRequest;
use App\Containers\AppSection\Base\Actions\CreateBaseAction;
use App\Containers\AppSection\Base\Actions\FindBaseByIdAction;
use App\Containers\AppSection\Base\Actions\GetAllBasesAction;
use App\Containers\AppSection\Base\Actions\UpdateBaseAction;
use App\Containers\AppSection\Base\Actions\DeleteBaseAction;
use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function index(GetAllBasesRequest $request)
    {
        $bases = app(GetAllBasesAction::class)->run($request);
        // ..
    }

    public function show(FindBaseByIdRequest $request)
    {
        $base = app(FindBaseByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateBaseRequest $request)
    {
        // ..
    }

    public function store(StoreBaseRequest $request)
    {
        $base = app(CreateBaseAction::class)->run($request);
        // ..
    }

    public function edit(EditBaseRequest $request)
    {
        $base = app(FindBaseByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateBaseRequest $request)
    {
        $base = app(UpdateBaseAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteBaseRequest $request)
    {
         $result = app(DeleteBaseAction::class)->run($request);
         // ..
    }
}
