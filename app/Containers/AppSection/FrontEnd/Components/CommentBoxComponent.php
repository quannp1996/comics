<?php

namespace App\Containers\AppSection\FrontEnd\Components;

use App\Containers\AppSection\Base\Components\BaseComponent;
use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\AppSection\Comment\Actions\GetAllCommentsAction;
use Illuminate\Validation\Rules\Enum;

class CommentBoxComponent extends BaseComponent
{
    protected int $mangaID;
    protected $comments;
    public function __construct(int $mangaID, GetAllCommentsAction $action)
    {
        parent::__construct();
        $this->mangaID = $mangaID;
        $this->comments = $action->setConditions([
            'status' => EnumBase::ENABLE_STATUS,
            'object_id' => $mangaID,
            'type'
        ])->setWithData(['replies'])->run(true, 10);
    }

    public function render()
    {
        return view('appSection@frontEnd::'.$this->template.'.components.comments', [
            'comments' => $this->comments
        ]);
    }
}
