<?php

namespace App\Service;

use DateTime;

class DateService
{
    private string $env;

    public function __construct(string $env)
    {
        $this->env = $env;
    }

    /**
     * @return string
     */
    public function getEnv(): string
    {
        return $this->env;
    }

    /**
     * @param string $env
     */
    public function getDate(): DateTime
    {
        if ($this->getEnv() == 'prod') {
            return new DateTime();
        }
        else {
            return new DateTime($_ENV['DATE']);
        }
    }
}