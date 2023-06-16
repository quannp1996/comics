<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;

class BaseAdminController extends WebController
{
    protected array $materialCss;
    protected array $materialJs;
    protected User $user;
    public function __construct()
    {
        $this->materialCss = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.css'));

        $this->materialJs = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.js'));
        /**
         * Add Css to all View
         */
        view()->share('materialCss', $this->materialCss);
        view()->share('materialJs', $this->materialJs);
        $this->middleware(function ($request, $next) {
            /**
             * Add Admin User to All View
             */
            if(auth()->user()){
                $this->user = auth()->user();
                view()->share('user', $this->user);
            }
            return $next($request);
        });
    }
}
