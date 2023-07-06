<?php

namespace App\Containers\AppSection\FrontEnd\Components;

use App\Containers\AppSection\Base\Components\BaseComponent;

class TopMenuComponent extends BaseComponent
{
    protected $menus;

    public function __construct()
    {
        $this->menus = collect([]);
    }

    public function render()
    {
        return view('appSection@frontEnd::'.$this->template.'.top');
    }
}
