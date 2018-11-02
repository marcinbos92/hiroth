<?php
declare(strict_types=1);

namespace App\Player\Skills;

/**
 * Class SkillFactory
 * @package App\Player\Skills
 */
class SkillFactory
{
    /**
     * @var string[]
     */
    private $skills;

    public function register(string $skillClass, string $type): self
    {
        $this->skills[$skillClass] = $type;

        return $this;
    }

    /**
     * @param string $skillClass
     * @return AbstractSkill
     * @throws InvalidSkillException
     */
    public function create(string $skillClass)
    {
        if (!array_key_exists($skillClass, $this->skills)) {
            throw new InvalidSkillException('Provided skill does not exist!');
        }
        return new $skillClass($this->skills[$skillClass]);
    }
}
