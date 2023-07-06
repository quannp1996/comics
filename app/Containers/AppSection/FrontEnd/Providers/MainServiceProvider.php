<?php

namespace App\Containers\AppSection\FrontEnd\Providers;

use App\Containers\AppSection\FrontEnd\Components\HeaderMenuComponent;
use App\Containers\AppSection\FrontEnd\Components\TopMenuComponent;
use App\Ship\Parents\Providers\MainProvider;
use Blade;

/**
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{
    /**
     * Container Service Providers.
     */
    public array $serviceProviders = [
        // InternalServiceProviderExample::class,
    ];

    /**
     * Container Aliases
     */
    public array $aliases = [
        // 'Foo' => Bar::class,
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
        Blade::component('header-menu', HeaderMenuComponent::class);
        Blade::component('topn-menu', TopMenuComponent::class);
    }
}
