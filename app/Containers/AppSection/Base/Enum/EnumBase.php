<?php
namespace App\Containers\AppSection\Base\Enum;

class EnumBase
{
    const ENABLE_STATUS = 2;
    const DISABLE_STATUS = 1;
    const DELETED_STATUS = -1;
    const LIST_STATUS = [
        self::ENABLE_STATUS => 'Hiển thị',
        self::DISABLE_STATUS => 'Ẩn',
        self::DELETED_STATUS => 'Đã xóa',
    ];
    public static function listStatus(): array
    {
        return [
            self::ENABLE_STATUS => 'Hiển thị'
        ];
    }
}
