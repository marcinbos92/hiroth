<?php
declare(strict_types=1);

namespace App\PresentationModel;

use App\Player\PlayerInterface;

class PresentationModel
{
    public function getFightView(): AbstractFightView
    {
        return new FightView();
    }

    /**
     * @param PlayerInterface $player
     * @return AbstractPlayerView
     */
    public function getPlayerView(PlayerInterface $player): AbstractPlayerView
    {
        return PlayerView::get($player);
    }
}
