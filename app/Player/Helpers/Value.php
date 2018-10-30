<?php
declare(strict_types=1);

namespace App\Player\Helpers;

/**
 * Class Value
 * @package App\Player\Helpers
 */
final class Value
{
    /**
     * @param int $min
     * @param int $max
     * @return int
     * @throws \Exception
     */
    public static function get(int $min, int $max): int {
        return \random_int($min, $max);
    }
}
