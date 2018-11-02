<?php
declare(strict_types=1);

namespace App\Player\Skills;

final class MagicShield extends AbstractSkill
{
    public function use(int $damage): int
    {
        return \intval($damage/2);
    }
}
