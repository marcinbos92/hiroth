<?php
declare(strict_types=1);

namespace App\Player;

use App\Player\Skills\AbstractSkill;
use App\Player\Statistics\StatisticsInterface;

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
     * @var StatisticsInterface
     */
    private $statistics;

    /**
     * @var AbstractSkill[]
     */
    private $skills;

    /**
     * Player constructor.
     * @param string $name
     * @param string $type
     * @param StatisticsInterface $statistics
     * @param AbstractSkill[] $skills
     */
    public function __construct(string $name, string $type, StatisticsInterface $statistics, array $skills)
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
     * @return StatisticsInterface
     */
    public function getStatistics(): StatisticsInterface
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

    public function subtractHealth(int $value): void
    {
        $this->statistics->setHealth($this->statistics->getHealth() - $value);
    }
}
