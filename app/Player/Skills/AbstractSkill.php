<?php
declare(strict_types=1);

namespace App\Player\Skills;

abstract class AbstractSkill
{
    public const DEFENSE = 'defence';
    public const ATTACK = 'attack';

    /**
     * @var string
     */
    protected $type;

    /**
     * AbstractSkill constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param int $damage
     * @return int
     */
    public abstract function use(int $damage): int;

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
