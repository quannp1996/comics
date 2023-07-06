<?php

namespace App\Containers\AppSection\Base\Components;

use Illuminate\View\Component;

class BaseComponent extends Component
{
    protected $template;

    public function __construct()
    {
        $this->template = config('appSection-frontend.template');
    }

    public function render()
    {
    }
}
