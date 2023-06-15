<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class BaseAdminController extends WebController
{
    public function __construct()
    {
        dd(config('appSection-base'));
    }
}
