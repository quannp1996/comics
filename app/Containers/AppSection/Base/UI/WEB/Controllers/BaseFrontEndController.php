<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

class BaseFrontEndController extends WebController
{
    protected array $materialCss;
    protected array $materialJs;
    protected User $user;
    protected string $template;
    public BreadCrumbGender $breadcrumb;

    public function __construct(BreadCrumbGender $breadcrumb)
    {
        $this->materialCss = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.css'));

        $this->materialJs = array_map(function ($item) {
            return filter_var($item, FILTER_VALIDATE_URL) ? $item : asset($item);
        }, config('appSection-base.admin.js'));


        $this->breadcrumb = $breadcrumb;
        /**
         * Add Css to all View
         */
        $this->template = config('appSection-frontend.template');
        view()->share('template', $this->template);
        view()->share('materialCss', $this->materialCss);
        view()->share('materialJs', $this->materialJs);
        $this->middleware(function ($request, $next) {
            /**
             * Add Admin User to All View
             */
            if (auth()->user('customer')) {
                $this->user = auth()->user();
                view()->share('user', $this->user);
            }
            return $next($request);
        });
    }

    public function show(string $path, array $data = []): View
    {
        return view('appSection@frontEnd::' . $this->template . '.' . $path, $data);
    }
}
