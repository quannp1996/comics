<?php

namespace App\Containers\AppSection\FrontEnd\Providers;

use App\Containers\AppSection\FrontEnd\Components\CommentBoxComponent;
use App\Containers\AppSection\FrontEnd\Components\FooterMenuComponent;
use App\Containers\AppSection\FrontEnd\Components\HeaderMenuComponent;
use App\Containers\AppSection\FrontEnd\Components\NewPublishedManga;
use App\Containers\AppSection\FrontEnd\Components\RecentPublishedManga;
use App\Containers\AppSection\FrontEnd\Components\TopMenuComponent;
use App\Containers\AppSection\FrontEnd\Libraries\LoadedManga;
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
    public array $serviceProviders = [];

    /**
     * Container Aliases
     */
    public array $aliases = [];

    /**
     * Register anything in the container.
     */
    public function register(): void
    {
        parent::register();
        $this->app->singleton(LoadedManga::class, function () {
            return new LoadedManga();
        });
    }

    public function boot(): void
    {
        Blade::component('header-menu', HeaderMenuComponent::class);
        Blade::component('top-menu', TopMenuComponent::class);
        Blade::component('footer-menu', FooterMenuComponent::class);
        Blade::component('published-manges', RecentPublishedManga::class);
        Blade::component('comments-box', CommentBoxComponent::class);
    }
}
