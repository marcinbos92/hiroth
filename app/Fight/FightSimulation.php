<?php
declare(strict_types=1);

namespace App\Fight;

use App\Player\Type;

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

        if (Type::beast() === $this->secondPlayer->getType()) {
            if (1 === $this->getLuckyNumberForDefender()) {
                echo $this->presentationModel->getFightView()->displayMissedAction();
                $damage = 0;
            }
        }



        $this->secondPlayer->subtractHealth($damage);

        echo $this->presentationModel->getFightView()->displayHitInfo($damage);
    }
}
