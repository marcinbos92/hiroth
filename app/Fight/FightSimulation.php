<?php
declare(strict_types=1);

namespace App\Fight;

use App\Player\PlayerInterface;

class FightSimulation
{
    /**
     * @var PlayerInterface
     */
    private $firstPlayer;

    /**
     * @var PlayerInterface
     */
    private $secondPlayer;

    /**
     * FightSimulation constructor.
     * @param PlayerInterface $firstPlayer
     * @param PlayerInterface $secondPlayer
     */
    public function __construct(PlayerInterface $firstPlayer, PlayerInterface $secondPlayer)
    {
        $this->firstPlayer = $firstPlayer;
        $this->secondPlayer = $secondPlayer;
    }

    public function start()
    {
        $this->setPlayersOrder();
        print_r($this->firstPlayer);
        print_r($this->secondPlayer);

        //move to config
        $turnsLimit = 20;

        $turns = 0;
        while (
            $turns < $turnsLimit &&
            $this->firstPlayer->getStatistics()->getHealth() > 0 &&
            $this->secondPlayer->getStatistics()->getHealth() > 0
        ) {
            echo("Round: " . ($turns + 1) . " \n");
            print_r($this->firstPlayer);
            print_r($this->secondPlayer);
            print_r("\n ======= After duel ===== \n");
            $damage = $this->firstPlayer->getStatistics()->getStrength() - $this->secondPlayer->getStatistics()->getDefence();
            $this->secondPlayer->subtractHealth($damage);
            print_r($this->firstPlayer);
            print_r($this->secondPlayer);
            $turns++;
            $this->swap();
        }
        echo("\nBattle has ended");
    }

    private function setPlayersOrder(): void
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

    private function swap(): void
    {
        list($this->firstPlayer, $this->secondPlayer) = [$this->secondPlayer, $this->firstPlayer];
    }
}
