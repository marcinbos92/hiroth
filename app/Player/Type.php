<?php
declare(strict_types=1);

namespace App\Player;

/**
 * Class Type
 * @package App\Player
 */
class Type
{
    /**
     * @return string
     */
    public static function human(): string
    {
        return 'HUMAN';
    }

    /**
     * @return string
     */
    public static function beast(): string
    {
        return 'BEAST';
    }
}
