<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

class BaseFrontEndController extends WebController
{
   
    protected string $template;
    protected User $user;
    protected BreadCrumbGender $breadcrumb;

    public function __construct(BreadCrumbGender $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
        /**
         * Add Css to all View
         */
        $this->template = config('appSection-frontend.template');
        view()->share('template', $this->template);
     
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
