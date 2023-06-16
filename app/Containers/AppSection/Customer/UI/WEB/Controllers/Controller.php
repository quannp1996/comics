<?php

namespace App\Containers\AppSection\Customer\UI\WEB\Controllers;

use App\Containers\AppSection\Customer\UI\WEB\Requests\CreateCustomerRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\DeleteCustomerRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\GetAllCustomersRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\FindCustomerByIdRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\UpdateCustomerRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\StoreCustomerRequest;
use App\Containers\AppSection\Customer\UI\WEB\Requests\EditCustomerRequest;
use App\Containers\AppSection\Customer\Actions\CreateCustomerAction;
use App\Containers\AppSection\Customer\Actions\FindCustomerByIdAction;
use App\Containers\AppSection\Customer\Actions\GetAllCustomersAction;
use App\Containers\AppSection\Customer\Actions\UpdateCustomerAction;
use App\Containers\AppSection\Customer\Actions\DeleteCustomerAction;
use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function index(GetAllCustomersRequest $request)
    {
        $customers = app(GetAllCustomersAction::class)->run($request);
        // ..
    }

    public function show(FindCustomerByIdRequest $request)
    {
        $customer = app(FindCustomerByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateCustomerRequest $request)
    {
        // ..
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = app(CreateCustomerAction::class)->run($request);
        // ..
    }

    public function edit(EditCustomerRequest $request)
    {
        $customer = app(FindCustomerByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateCustomerRequest $request)
    {
        $customer = app(UpdateCustomerAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteCustomerRequest $request)
    {
         $result = app(DeleteCustomerAction::class)->run($request);
         // ..
    }
}
