<?php

namespace App\Ship\Parents\Actions;

use Apiato\Core\Abstracts\Actions\Action as AbstractAction;
use App\Ship\Core\Traits\CacheableGlobalTrait;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Config\Repository as ConfigRepository;

abstract class Action extends AbstractAction
{
    use CacheableGlobalTrait;
    protected $externalWith = [];
    public function __construct()
    {
        $this->cache = app(Repository::class);
        $this->cacheTime = app(ConfigRepository::class)->get('cache.action_cache_time', 60);
        $this->locale = app()->getLocale();
        $this->enableCache = env('APP_ACTION_CACHE', false);
    }
}
