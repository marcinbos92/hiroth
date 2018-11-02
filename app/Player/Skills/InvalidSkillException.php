<?php
declare(strict_types=1);

namespace App\Player\Skills;

class InvalidSkillException extends \Exception
{
    protected $message;

    /**
     * InvalidSkill constructor.
     * @param $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
