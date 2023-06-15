<?php

namespace App\Containers\AppSection\Base\UI\WEB\Controllers;

class DashboardAdminController extends BaseAdminController
{
    public function dashboard()
    {
        return view('appSection@base::admin.pages.dashboard');
    }
}
