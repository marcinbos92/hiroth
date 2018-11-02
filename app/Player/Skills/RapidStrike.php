<?php
declare(strict_types=1);

namespace App\Player\Skills;

final class RapidStrike extends AbstractSkill
{
    public function use(int $damage): int
    {
        return \intval($damage*2);
    }
}
