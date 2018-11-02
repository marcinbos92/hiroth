<?php
declare(strict_types=1);

namespace App\Player;

use App\Player\Statistics\StatisticsInterface;

/**
 * Interface PlayerInterface
 * @package App\Player
 */
interface PlayerInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return StatisticsInterface
     */
    public function getStatistics(): StatisticsInterface;

    /**
     * @return iterable
     */
    public function getSkills(): iterable;

    public function subtractHealth(int $value): void;
}
