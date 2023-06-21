<?php

namespace App\Containers\AppSection\Base\Components;

use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use Illuminate\View\Component;

class AdminBreadcrumbsComponent extends Component
{
    protected $breadcrumbs;
    protected $title;

    public function __construct(BreadCrumbGender $breadcrumb)
    {
        $this->breadcrumbs = $breadcrumb->getList();
        $this->title = $breadcrumb->getTitle();
    }

    public function render()
    {
        return view('appSection@base::components.admin_breadcrumbs');
    }    
}
