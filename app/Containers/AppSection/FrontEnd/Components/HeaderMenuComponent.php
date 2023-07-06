<?php

namespace App\Containers\AppSection\FrontEnd\Components;

use App\Containers\AppSection\Base\Components\BaseComponent;
use Illuminate\View\Component;

class HeaderMenuComponent extends BaseComponent
{

    public function render()
    {
        return view('appSection@frontEnd::' . $this->template . '.components.header_menu');
    }
}
