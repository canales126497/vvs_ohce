<?php

namespace Deg540\PHPTestingBoilerplate;

class DayMomentProvider
{
    public const NIGHT = 0;
    public const MORNING = 1;
    public const AFTERNOON = 2;

    public function getDayMoment(): int
    {
        $current_hour = (int)date("H");

        if ($current_hour >= 20 or $current_hour <= 6) {
            return DayMomentProvider::NIGHT;
        } elseif ($current_hour >= 6 and $current_hour <= 12) {
            return DayMomentProvider::MORNING;
        } elseif ($current_hour >= 12 and $current_hour <= 20) {
            return DayMomentProvider::AFTERNOON;
        }

        return "no_valid";
    }
}
