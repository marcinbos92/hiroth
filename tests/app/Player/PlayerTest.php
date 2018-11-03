<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Player\Statistics\StatisticsInterface;
use App\Player\Statistics\Statistics;
use App\Player\Skills\AbstractSkill;
use App\Player\Skills\MagicShield;
use App\Player\Skills\RapidStrike;
use App\Player\Player;
use App\Player\Type;

class PlayerTest extends TestCase
{
    public function testCorrectPlayerSetUp(): void
    {
        $statisticsMock = $this->createMock(StatisticsInterface::class);
        $statisticsMock->method('getHealth')->willReturn(100);
        $statisticsMock->method('getStrength')->willReturn(40);
        $statisticsMock->method('getDefence')->willReturn(60);
        $statisticsMock->method('getSpeed')->willReturn(45);
        $statisticsMock->method('getLuck')->willReturn(25);

        $magicShieldSkill = new MagicShield(AbstractSkill::DEFENSE);

        $name = 'Test';
        $type = Type::human();

        $player = new Player($name, $type, $statisticsMock, [$magicShieldSkill]);
        $this->assertEquals($type, $player->getType());
        $this->assertEquals($name, $player->getName());
        $this->assertInstanceOf(StatisticsInterface::class, $player->getStatistics());
        $this->assertInternalType('array', $player->getSkills());
        $this->assertContainsOnlyInstancesOf(AbstractSkill::class, $player->getSkills());
        $this->assertContainsOnly(MagicShield::class, $player->getSkills());
    }

    /**
     * @throws ReflectionException
     */
    public function testMagicShieldSkill(): void
    {
        $magicShieldSkill = new MagicShield(AbstractSkill::DEFENSE);
        $this->assertEquals('MagicShield', $magicShieldSkill->getName());
        $this->assertEquals(AbstractSkill::DEFENSE, $magicShieldSkill->getType());
        $this->assertEquals(5, $magicShieldSkill->use(10));
    }
    /**
     * @throws ReflectionException
     */
    public function testRapidStrikeSkill(): void
    {
        $rapidStrikeSkill = new RapidStrike(AbstractSkill::ATTACK);
        $this->assertEquals('RapidStrike', $rapidStrikeSkill->getName());
        $this->assertEquals(AbstractSkill::ATTACK, $rapidStrikeSkill->getType());
        $this->assertEquals(20, $rapidStrikeSkill->use(10));
    }

    public function testSubtractHealth()
    {
        $statistics = new Statistics(100, 50, 50, 50,30);
        $magicShieldSkill = new MagicShield(AbstractSkill::DEFENSE);

        $name = 'Test';
        $type = Type::human();

        $player = new Player($name, $type, $statistics, [$magicShieldSkill]);
        $player->subtractHealth(90);
        $this->assertEquals(10, $player->getStatistics()->getHealth());
    }
}
