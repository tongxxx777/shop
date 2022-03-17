<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class BannerIsShow extends Enum
{
    const NO = 0;
    const YES = 1;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::NO:
                return '不展示';
                break;
            case self::YES:
                return '展示';
                break;
        }
        return parent::getDescription($value);
    }
}
