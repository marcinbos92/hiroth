<?php
declare(strict_types=1);

namespace App\Fight;

use App\Config\Settings;
use App\Player\PlayerInterface;
use App\Player\Skills\AbstractSkill;
use App\Player\Type;
use App\PresentationModel\PresentationModel;

abstract class AbstractSimulation
{
    protected const ATTACKER = 'Attacker >';
    protected const DEFENDER = 'Defender >';

    /**
     * @var PlayerInterface
     */
    protected $firstPlayer;

    /**
     * @var PlayerInterface
     */
    protected $secondPlayer;

    /**
     * @var PresentationModel
     */
    protected $presentationModel;

    /**
     * @var Settings
     */
    protected $settings;

    /**
     * FightSimulation constructor.
     * @param PlayerInterface $firstPlayer
     * @param PlayerInterface $secondPlayer
     * @param PresentationModel $presentationModel
     * @param Settings $settings
     */
    public function __construct(
        PlayerInterface $firstPlayer,
        PlayerInterface $secondPlayer,
        PresentationModel $presentationModel,
        Settings $settings
    )
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
        $this->presentationModel = $presentationModel;
        $this->settings = $settings;
    }

    protected function getWinner(): PlayerInterface
    {
        $firstPlayerHealth = $this->firstPlayer->getStatistics()->getHealth();
        $secondPlayerHealth = $this->secondPlayer->getStatistics()->getHealth();

        if ($firstPlayerHealth && $secondPlayerHealth) {
            return $firstPlayerHealth > $secondPlayerHealth ? $this->firstPlayer : $this->secondPlayer;
        }

        return $firstPlayerHealth < 0 ? $this->secondPlayer : $this->firstPlayer;
    }

    protected function swap(): void
    {
        list($this->firstPlayer, $this->secondPlayer) = [$this->secondPlayer, $this->firstPlayer];
    }


    protected function getLuckyNumberForAttacker(): int
    {
        return mt_rand(1, (int)((1/$this->firstPlayer->getStatistics()->getLuck()) * 100));
    }

    protected function getLuckyNumberForDefender(): int
    {
        return mt_rand(1, (int)((1/$this->secondPlayer->getStatistics()->getLuck()) * 100));
    }

    protected function getRandomSkill(array $skills): AbstractSkill
    {
        return $skills[\array_rand($skills)];
    }

    protected function obtainAttackSkills(): array
    {
        return \array_filter( $this->firstPlayer->getSkills(), function (AbstractSkill $skill) {
            if (AbstractSkill::ATTACK === $skill->getType()) {
                return $skill;
            }
        });
    }

    protected function obtainDefenceSkills(): array
    {
        return \array_filter($this->secondPlayer->getSkills(), function (AbstractSkill $skill) {
            if (AbstractSkill::DEFENSE === $skill->getType()) {
                return $skill;
            }
        });
    }

    protected function setPlayersOrder(): void
    {
        $firstPlayerStats = $this->firstPlayer->getStatistics();
        $secondPlayerStats = $this->secondPlayer->getStatistics();
        if ($firstPlayerStats->getSpeed() === $secondPlayerStats->getSpeed()) {
            if ($firstPlayerStats->getLuck() < $secondPlayerStats->getLuck()) {
                $this->swap();
            }
        } else {
            if ($firstPlayerStats->getSpeed() < $secondPlayerStats->getSpeed()) {
                $this->swap();
            }
        }
    }

    public abstract function start(): void;
}
