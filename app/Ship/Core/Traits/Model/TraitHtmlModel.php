<?php

namespace App\Ship\Core\Traits\Model;

use App\Containers\AppSection\Base\Enum\EnumBase;
use App\Containers\BaseContainer\Enums\BaseEnum;

trait TraitHtmlModel
{
    public function getBadgeHtml($keyActive = 'status')
    {
        return '<span class="' . $this->getClass($keyActive) . '">' . $this->getStatusText($keyActive) . '</span>';
    }

    public function getClass($keyActive = 'status')
    {
        $list = [
            EnumBase::ENABLE_STATUS => 'badge bg-success',
            EnumBase::DISABLE_STATUS => 'badge bg-secondary',
            EnumBase::DELETED_STATUS => 'badge bg-danger',
        ];
        return in_array($this->{$keyActive}, array_keys($list)) ? $list[$this->{$keyActive}] : 'badge bg-secondary';
    }

    public function getStatusText($keyActive = 'status'): string
    {
        switch ($this->{$keyActive}) {
            case EnumBase::ENABLE_STATUS:
                return 'Hiển thị';
                break;
            case EnumBase::DISABLE_STATUS:
            default:
                return 'Ẩn';
                break;
            case EnumBase::DELETED_STATUS:
                return 'Đã xóa';
                break;
        }
    }
}
