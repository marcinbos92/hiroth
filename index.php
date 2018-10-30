<?php declare(strict_types=1);
require_once('vendor/autoload.php');

use App\Config\Settings;
use App\Player\Statistics\Statistics;
use App\Player\Player;
use App\Player\Type;
// Front controller
$config = new Settings();
$statistics = Statistics::get();

$playerOne = new Player('Orderus', Type::human(), $statistics, []);
$playerTwo = new Player('Beast', Type::beast(), $statistics, []);


var_dump($player);
