<?php
declare(strict_types=1);

namespace App\PresentationModel;

use App\Player\PlayerInterface;
use App\Player\Type;

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
        $sword = <<<EOF
                   /}
                  //
                 /{     />
  ,_____________///----/{____________________________________________________
/|=============|/\|-----/_______________BATTLE HAS STARTED!__________________\
\|=============|\/|-----\____________________________________________________/
  '~~~~~~~~~~~~~\\\----\{
                 \{     \>
                  \\
                   \}
EOF;


        return \sprintf("\n$sword\n");
    }

    public function displayRound(int $number): string
    {
        return \sprintf("\n-----[Round %d]------------------------------------------------------------------------>>>\n", $number);
    }

    public function displayHitInfo(int $value): string
    {
        return \sprintf("\nDefender hit by Attacker %d points \n\n", $value);
    }

    public function displayWinner(PlayerInterface $player): string
    {
        $image = '';
        if ($player->getType() === Type::beast()) {
            $image = $this->displayBeast();
        }
        if ($player->getType() === Type::human()) {
            $image = $this->displayHero();
        }
        return \sprintf("\nThe winner is... %s !!!\n%s", $player->getName(), $image);
    }

    public function displaySkillUsage(string $name): string
    {
        return \sprintf("\n >>> Used %s! <<<\n", $name);
    }

    public function displayMissedAction(): string
    {
        return \sprintf("\n >>> Attack missed! <<<\n");
    }

    public function displayHero(): string
    {
        return <<<EOF
                    \ : /
                    '-: __ :-'
                    -:  )(_ :--
                    -' |r-_i'-
            ,sSSSSs,   (2-,7
            sS';:'`Ss   )-j
           ;K e (e s7  /  (
            S, ''  SJ (  ;/
            sL_~~_;(S_)  _7
|,          'J)_.-' />'-' `Z
j J         /-;-A'-'|'--'-j\
 L L        )  |/   :    /  \
  \ \       | | |    '._.'|  L
   \ \      | | |       | \  J
    \ \    _/ | |       |  ',|
     \ L.,' | | |       |   |/
    _;-r-<_.| \=\    __.;  _/
      {_}"  L-'  '--'   / /|
            |   ,      |  \|
            |   |      |   ")
            L   ;|     |   /|
           /|    ;     |  / |
          | |    ;     |  ) |
         |  |    ;|    | /  |
         | ;|    ||    | |  |
         L-'|____||    )/   |
             % %/ '-,- /    /
             |% |   \%/_    |
          ___%  (   )% |'-; |
        C;.---..'   >%,(   "'
                   /%% /
                  Cccc'
EOF;

    }

    public function displayBeast(): string
    {
        return <<<EOF
                            ,-.                               
       ___,---.__          /'|`\          __,---,___          
    ,-'    \`    `-.____,-'  |  `-.____,-'    //    `-.       
  ,'        |           ~'\     /`~           |        `.      
 /      ___//              `. ,'          ,  , \___      \    
|    ,-'   `-.__   _         |        ,    __,-'   `-.    |    
|   /          /\_  `   .    |    ,      _/\          \   |   
\  |           \ \`-.___ \   |   / ___,-'/ /           |  /  
 \  \           | `._   `\\  |  //'   _,' |           /  /      
  `-.\         /'  _ `---'' , . ``---' _  `\         /,-'     
     ``       /     \    ,='/ \`=.    /     \       ''          
             |__   /|\_,--.,-.--,--._/|\   __|                  
             /  `./  \\`\ |  |  | /,//' \,'  \                  
           /   /     ||--+--|--+-/-|     \   \                 
           |   |     /'\_\_\ | /_/_/`\     |   |                
            \   \__, \_     `~'     _/ .__/   /            
             `-._,-'   `-._______,-'   `-._,-'
EOF;
    }
}
