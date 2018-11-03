<?php
declare(strict_types=1);

namespace App\PresentationModel;

use App\Player\PlayerInterface;
use App\Player\Skills\AbstractSkill;

abstract class AbstractPlayerView
{
    /**
     * @var PlayerInterface
     */
    protected $player;

    /**
     * AbstractPlayerView constructor.
     * @param PlayerInterface $player
     */
    protected function __construct(PlayerInterface $player)
    {
        $this->player = $player;
    }

    public abstract static function get(PlayerInterface $player): self;

    public function display(string $type): string
    {
        return \sprintf(
            "%s | %s | %s",
            $type,
            $this->player->getName(),
            $this->player->getType()
        );
    }

    public function displayStatistics(): string
    {
        $stats = $this->player->getStatistics();
        return \sprintf(
            "H:%3.3d | ST:%3.3d | D:%3.3d | SP:%3.3d | L:%3.3d",
            $stats->getHealth(),
            $stats->getStrength(),
            $stats->getDefence(),
            $stats->getSpeed(),
            $stats->getLuck()
        );
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function displaySkills(): string
    {
        $skillsString = '[ ';
        /**
         * @var $skill AbstractSkill
         */
        foreach ($this->player->getSkills() as $skill) {
            $skillsString .= $skill->getName() . ' ';
        }

        return $skillsString . ']';
    }

}
