<?php declare(strict_types=1);

namespace App\Config;

class Settings
{
    /**
     * @var int
     */
    private $turnsLimit;

    /**
     * Settings constructor.
     * @param int $turnsLimit
     */
    public function __construct(int $turnsLimit)
    {
        $this->turnsLimit = $turnsLimit;
    }

    /**
     * @return int
     */
    public function getTurnsLimit(): int
    {
        return $this->turnsLimit;
    }
}
