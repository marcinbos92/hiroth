<?php
declare(strict_types=1);

namespace App\Player;

use App\Player\Helpers\Value;
use App\Player\Statistics\Statistics;
use App\Player\Statistics\StatisticsInterface;

class StatisticsFactory
{
    public static function get(string $type): StatisticsInterface
    {
        try {
            if ($type === Type::human()) {
                return self::getForHumant();
            } elseif ($type === Type::beast()) {
                return self::getForBeast();
            } else {
                return new Statistics(70, 70, 45, 40, 10);
            }
        } catch (\Exception $e) {
            \sprintf('Problem occurred during statistic generation');
        }
    }

    public static function getForBeast(): StatisticsInterface
    {
        return new Statistics(Value::get(60, 90), Value::get(60, 90), Value::get(40, 60), Value::get(40, 60), Value::get(25, 40));
    }

    public static function getForHumant(): StatisticsInterface
    {
        return new Statistics(Value::get(70, 100), Value::get(70, 80), Value::get(45, 55), Value::get(40, 50), Value::get(10, 30));
    }
}
