<?php
declare(strict_types=1);

namespace App\Fight;

use App\Player\PlayerInterface;
use App\PresentationModel\PresentationModel;

abstract class AbstractSimulation
{
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

    protected const ATTACKER = 'Attacker >';
    protected const DEFENDER = 'Defender >';

    /**
     * FightSimulation constructor.
     * @param PlayerInterface $firstPlayer
     * @param PlayerInterface $secondPlayer
     * @param PresentationModel $presentationModel
     */
    public function __construct(PlayerInterface $firstPlayer, PlayerInterface $secondPlayer, PresentationModel $presentationModel)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
        $this->presentationModel = $presentationModel;
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
        $this->secondPlayer->subtractHealth($damage);
        echo $this->presentationModel->getFightView()->displayHitInfo($damage);
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
