<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Config\Settings;

final class SettingsTest extends TestCase
{
    public function testGetTurnsLimitNumberFromSettings(): void
    {
        $turnsLimit = 10;
        $settings = new Settings($turnsLimit);

        $this->assertEquals($turnsLimit, $settings->getTurnsLimit());
    }
}
