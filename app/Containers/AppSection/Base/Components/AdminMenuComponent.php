<?php

namespace App\Containers\AppSection\Base\Components;

use Illuminate\View\Component;

class AdminMenuComponent extends Component
{
    protected $menus;

    public function __construct()
    {
        $this->menus = collect([]);
    }

    public function render()
    {
        return view('appSection@base::components.admin_menus');
    }    

    protected function previousShow(array $menus): array
    {
        
        return [];
    }
}
