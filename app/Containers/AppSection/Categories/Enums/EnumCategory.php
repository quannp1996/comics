<?php 
namespace App\Containers\AppSection\Categories\Enums;

use App\Containers\AppSection\Base\Enum\EnumBase;

final class EnumCategory extends EnumBase
{
    const NONE = 0;
    const CATEGORY_MANGA = 1;
    const CATEGORY_NEW = 2;

    const LIST_TYPES = [
        self::CATEGORY_MANGA => 'Truyện Tranh',
        self::CATEGORY_NEW => 'Tin Tức'
    ];

    const CATEGORY_IN = [
        self::CATEGORY_MANGA,
        self::CATEGORY_NEW,
    ];

    const CAN_FILLABLE = [
        
    ];
}
?>