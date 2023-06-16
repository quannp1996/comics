<?php

namespace Apiato\Core\Traits\Model;

use App\Containers\BaseContainer\Enums\BaseEnum;

trait TraitHtmlModel
{
    public function getBadgeHtml()
    {
        $list = [
            BaseEnum::ACTIVE => 'badge bg-success',
            BaseEnum::DE_ACTIVE => 'badge bg-secondary',
            BaseEnum::DELETE => 'badge bg-danger',
        ];
        return in_array($this->active, array_keys($list)) ? $list[$this->active] : 'badge bg-secondary';
    }

    public function getStatusText(): string
    {
        switch ($this->active) {
            case BaseEnum::ACTIVE:
            default:
                return 'Đã duyệt';
                break;
            case BaseEnum::DE_ACTIVE:
                return 'Chờ duyệt';
                break;
            case BaseEnum::DELETE:
                return 'Đã xóa';
                break;
        }
    }
}
