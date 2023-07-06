<?php

namespace App\Containers\AppSection\FrontEnd\Components;

use App\Containers\AppSection\Base\Components\BaseComponent;
use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Manga\Actions\GetAllMangasAction;

class RecentPublishedManga extends BaseComponent
{
    protected $manges;

    public function __construct(?int $limit = 10, GetAllMangasAction $action)
    {
        parent::__construct();
        $this->manges = $action->setConditions([
            'status' => EnumBase::ENABLE_STATUS
        ])->setWithData(['desc'])->run(false, $limit);
    }
    public function render()
    {
        return view('appSection@frontEnd::' . $this->template . '.components.recent_published_manga', [
            'manges' => $this->manges
        ]);
    }
}
