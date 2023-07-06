<?php

namespace App\Containers\AppSection\FrontEnd\Components;

use App\Containers\AppSection\Base\Components\BaseComponent;

class FooterMenuComponent extends BaseComponent
{
    protected $menus;

    public function render()
    {
        return view('appSection@frontEnd::'.$this->template.'.components.footer_component');
    }
}
