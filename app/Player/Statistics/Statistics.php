<?php
declare(strict_types=1);

namespace App\Player\Statistics;

/**
 * Class Statistics
 * @package App\Player\Statistics
 */
class Statistics implements StatisticsInterface
{
    /**
     * @var int
     */
    private $health;

    /**
     * @var
     */
    private $strength;

    /**
     * @var int
     */
    private $defence;

    /**
     * @var int
     */
    private $speed;

    /**
     * @var int
     */
    private $luck;

    /**
     * Statistics constructor.
     * @param int $health
     * @param $strength
     * @param int $defence
     * @param int $speed
     * @param int $luck
     */
    public function __construct(int $health, int $strength, int $defence, int $speed, int $luck)
    {
        $this->health = $health;
        $this->strength = $strength;
        $this->defence = $defence;
        $this->speed = $speed;
        $this->luck = $luck;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getDefence(): int
    {
        return $this->defence;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getLuck(): int
    {
        return $this->luck;
    }
}
