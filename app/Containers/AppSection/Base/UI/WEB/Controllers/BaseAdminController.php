<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class BaseAdminController extends WebController
{
    protected array $materialCss;

    public function __construct()
    {
        $this->materialCss = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.css'));

        view()->share('materialCss', $this->materialCss);
    }
}
