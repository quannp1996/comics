<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class BaseAdminController extends WebController
{
    protected array $materialCss;
    protected User $user;
    public function __construct()
    {
        $this->materialCss = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.css'));
        view()->share('materialCss', $this->materialCss);
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user();
            view()->share('user', $this->user);
            return $next($request);
        });
    }
}
