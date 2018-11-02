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

    protected function getWinner(): string
    {
        $firstPlayerHealth = $this->firstPlayer->getStatistics()->getHealth();
        $secondPlayerHealth = $this->secondPlayer->getStatistics()->getHealth();

        if ($firstPlayerHealth && $secondPlayerHealth) {
            return $firstPlayerHealth > $secondPlayerHealth ? $this->firstPlayer->getName() : $this->secondPlayer->getName();
        }

        return $firstPlayerHealth < 0 ? $this->secondPlayer->getName() : $this->firstPlayer->getName();
    }

    protected function swap(): void
    {
        list($this->firstPlayer, $this->secondPlayer) = [$this->secondPlayer, $this->firstPlayer];
    }

    protected function duel(): void
    {
        $damage = $this->firstPlayer->getStatistics()->getStrength() - $this->secondPlayer->getStatistics()->getDefence();

        if (Type::human() === $this->firstPlayer->getType()) {
            if (1 === $this->getLuckyNumberForAttacker()) {
                $randomSkill = $this->getRandomSkill($this->obtainAttackSkills());
                echo $this->presentationModel->getFightView()->displaySkillUsage($randomSkill->getName());
                $damage = $randomSkill->use($damage);
            }

        }

        if (Type::human() === $this->secondPlayer->getType()) {
            if (1 === $this->getLuckyNumberForDefender()) {
                $randomSkill = $this->getRandomSkill($this->obtainDefenceSkills());
                echo $this->presentationModel->getFightView()->displaySkillUsage($randomSkill->getName());
                $damage = $randomSkill->use($damage);
            }
        }

        $this->secondPlayer->subtractHealth($damage);

        echo $this->presentationModel->getFightView()->displayHitInfo($damage);
    }

    private function getLuckyNumberForAttacker(): int
    {
        return mt_rand(1, (int)((1/$this->firstPlayer->getStatistics()->getLuck()) * 100));
    }

    private function getLuckyNumberForDefender(): int
    {
        return mt_rand(1, (int)((1/$this->secondPlayer->getStatistics()->getLuck()) * 100));
    }

    private function getRandomSkill(array $skills): AbstractSkill
    {
        return $skills[\array_rand($skills)];
    }

    private function obtainAttackSkills(): array
    {
        return \array_filter( $this->firstPlayer->getSkills(), function (AbstractSkill $skill) {
            if (AbstractSkill::ATTACK === $skill->getType()) {
                return $skill;
            }
        });
    }

    private function obtainDefenceSkills(): array
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
