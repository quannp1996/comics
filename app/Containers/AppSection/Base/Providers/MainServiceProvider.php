<?php

namespace App\Containers\AppSection\Base\Providers;

use App\Containers\AppSection\Base\Components\AdminBreadcrumbsComponent;
use App\Containers\AppSection\Base\Components\AdminMenuComponent;
use App\Containers\AppSection\Base\Libraries\BreadCrumbGender;
use App\Ship\Core\Interfaces\IUploadFile;
use App\Ship\Core\Libraries\UploadImageFile;
use App\Ship\Parents\Providers\MainProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Blade;

/**
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{
    /**
     * Container Service Providers.
     */
    public array $serviceProviders = [
    ];

    /**
     * Container Aliases
     */
    public array $aliases = [
    ];

    /**
     * Register anything in the container.
     */
    public function register(): void
    {
        parent::register();
    }

    public function boot(): void
    {   
        Blade::component('admin-menus', AdminMenuComponent::class);
        Blade::component('admin-breadcrumbs', AdminBreadcrumbsComponent::class);
        $this->app->singleton(BreadCrumbGender::class, function(){
            return new BreadCrumbGender();
        });
        $this->app->bind(IUploadFile::class, function(Application $app){
            return new UploadImageFile();
        });
    }
}
