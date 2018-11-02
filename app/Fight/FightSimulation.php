<?php
declare(strict_types=1);

namespace App\Fight;


class FightSimulation extends AbstractSimulation
{

    public function start(): void
    {
        echo $this->presentationModel->getFightView()->displayGameHeader();
        echo $this->presentationModel->getFightView()->displayWelcome();

        $this->setPlayersOrder();
        echo $this->presentationModel->getFightView()->displayFightStarted();

        $turns = 0;
        while (
            $turns < $this->settings->getTurnsLimit() &&
            $this->firstPlayer->getStatistics()->getHealth() > 0 &&
            $this->secondPlayer->getStatistics()->getHealth() > 0
        ) {
            echo $this->presentationModel->getFightView()->displayRound($turns + 1);
            echo $this->presentationModel->getPlayerView($this->firstPlayer)->display(self::ATTACKER);
            echo $this->presentationModel->getPlayerView($this->secondPlayer)->display(self::DEFENDER);
            $this->duel();
            echo $this->presentationModel->getPlayerView($this->firstPlayer)->display(self::ATTACKER);
            echo $this->presentationModel->getPlayerView($this->secondPlayer)->display(self::DEFENDER);

            $turns++;
            $this->swap();
        }


        echo $this->presentationModel->getFightView()->displayWinner($this->getWinner());
    }
}
