<?php
declare(strict_types=1);

namespace App\Player\Statistics;

/**
 * Interface StatisticsInterface
 * @package App\Player\Statistics
 */
interface StatisticsInterface
{
    /**
     * @return int
     */
    public function getHealth(): int;

    /**
     * @return int
     */
    public function getStrength(): int;

    /**
     * @return int
     */
    public function getDefence(): int;

    /**
     * @return int
     */
    public function getSpeed(): int;

    /**
     * @return int
     */
    public function getLuck(): int;
}
