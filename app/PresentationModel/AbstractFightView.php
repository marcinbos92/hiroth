<?php
declare(strict_types=1);

namespace App\PresentationModel;

abstract class AbstractFightView
{
    public function displayGameHeader(): string
    {
        return \sprintf("---===| %6.6s |===---\n---===| %6.6s |===---\n*********************\nv1.0.0 by Marcin Boś \n", 'Hiroth', 'GAME');
    }

    public function displayWelcome(): string
    {
        return \sprintf("_____________________\n\n Once upon a time there was a great hero, called Orderus, 
        with some strengths and weaknesses, as all heroes have.\n\n");
    }

    public function displayFightStarted(): string
    {
        return \sprintf("Battle has started! \n");
    }

    public function displayRound(int $number): string
    {
        return \sprintf("\n[Round %d]\n", $number);
    }

    public function displayHitInfo(int $value): string
    {
        return \sprintf("\nDefender hit by Attacker %d points \n\n", $value);
    }

    public function displayWinner(string $name): string
    {
        return \sprintf("\nThe winner is... %s !!!", $name);
    }
}
