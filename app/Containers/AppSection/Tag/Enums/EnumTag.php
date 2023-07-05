<?php

namespace App\Containers\AppSection\Tag\Enums;

use App\Containers\AppSection\Base\Enum\EnumBase;

class EnumTag extends EnumBase
{
    const TYPE_COMMIC = 1;
    const TYPE_NEW = 2;
    const TEXT_COMMIC = 'Truyện Tranh';
    const TEXT_NEW = 'Tin tức';
    const TYPE_TEXT = [
        self::TYPE_COMMIC => self::TEXT_COMMIC,
        self::TYPE_NEW => self::TEXT_NEW,
    ];
}
