<?php
declare(strict_types=1);

namespace App\PresentationModel;

use App\Player\PlayerInterface;

class PlayerView extends AbstractPlayerView
{
    public static function get(PlayerInterface $player): AbstractPlayerView
    {
        return new self($player);
    }

    public function display(string $type): string
    {
        return \sprintf(
            "%s |%5.5s|%-10.10s (%s)\n",
            $type,
            $this->player->getType(),
            $this->player->getName(),
            $this->displayStatistics()
        );
    }
}
