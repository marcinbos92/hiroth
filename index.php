<?php declare(strict_types=1);
require_once('vendor/autoload.php');

use App\Fight\FightSimulation;
use App\Config\Settings;
use App\Player\StatisticsFactory;
use App\Player\Player;
use App\Player\Type;
// Front controller
$config = new Settings();

$playerOne = new Player('Orderus', Type::human(), StatisticsFactory::get(Type::human()), []);
$playerTwo = new Player('Beast', Type::beast(), StatisticsFactory::get(Type::beast()), []);

$fight = new FightSimulation($playerOne, $playerTwo);
$fight->start();
