<?php
declare(strict_types=1);

namespace App\Player;

use App\Player\Statistics\Statistics;

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
    public function getType(): string ;

    /**
     * @return Statistics
     */
    public function getStatistics(): Statistics;

    /**
     * @return iterable
     */
    public function getSkills(): iterable;
}
