<?php
declare(strict_types=1);

namespace App\Player;

use App\Player\Statistics\Statistics;

/**
 * Class Player
 * @package App\Player
 */
class Player implements PlayerInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var
     */
    private $statistics;

    /**
     * @var
     */
    private $skills;

    /**
     * Player constructor.
     * @param string $name
     * @param string $type
     * @param Statistics $statistics
     * @param $skills
     */
    public function __construct(string $name, string $type, Statistics $statistics, $skills)
    {
        $this->name = $name;
        $this->type = $type;
        $this->statistics = $statistics;
        $this->skills = $skills;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Statistics
     */
    public function getStatistics(): Statistics
    {
        return $this->statistics;
    }

    /**
     * @return iterable
     */
    public function getSkills(): iterable
    {
        return $this->skills;
    }
}
