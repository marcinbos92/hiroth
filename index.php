<?php declare(strict_types=1);
require_once('vendor/autoload.php');

use App\PresentationModel\PresentationModel;
use App\Player\Skills\InvalidSkillException;
use App\Player\Skills\AbstractSkill;
use App\Player\Skills\SkillFactory;
use App\Player\Skills\MagicShield;
use App\Player\Skills\RapidStrike;
use App\Fight\FightSimulation;
use App\Config\Settings;
use App\Player\StatisticsFactory;
use App\Player\Player;
use App\Player\Type;

// Front Controller

$skillFactory = new SkillFactory();
$skillFactory->register(MagicShield::class, AbstractSkill::DEFENSE)
    ->register(RapidStrike::class, AbstractSkill::ATTACK);

try {
    $playerOne = new Player('Orderus', Type::human(), StatisticsFactory::get(Type::human()), [
            $skillFactory->create(MagicShield::class),
            $skillFactory->create(RapidStrike::class),
        ]);

    $playerTwo = new Player(
        'Emagia',
        Type::beast(),
        StatisticsFactory::get(Type::beast()),
        []
    );
} catch (InvalidSkillException $e) {
    echo $e->getMessage();
}

$fight = new FightSimulation($playerOne, $playerTwo, new PresentationModel(), new Settings(20));

$fight->start();
