<?php

namespace App\Containers\AppSection\FrontEnd\UI\WEB\Controllers;

use App\Containers\AppSection\Base\UI\WEB\Controllers\BaseFrontEndController;

class HomeController extends BaseFrontEndController
{

    public function index()
    {
        return $this->show('pages.home.index');
    }
}
