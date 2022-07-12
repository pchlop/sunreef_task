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
    public function getDate(): string
    {
        if ($this->getEnv() == 'prod') {
            $date = new DateTime();
        }
        else {
            $date = new DateTime($_ENV['DATE']);
        }

        return $date->format('Y-m-d');
    }
}