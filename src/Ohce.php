<?php

namespace Deg540\PHPTestingBoilerplate;

use Deg540\PHPTestingBoilerplate\DayMomentProvider;

class Ohce
{
    private DayMomentProvider $day;

    public function __construct(DayMomentProvider $day)
    {
        $this->day = $day;
    }

    public function execute(string $text_to_reverse): string
    {
        if (preg_match("/ohce/  ", $text_to_reverse) == 1) {
            $day_moment = $this->day->getDayMoment();
            $this->user_name = explode("ohce ", $text_to_reverse)[1];
            if ($day_moment == DayMomentProvider::NIGHT) {
                return "Buenas noches " . $this->user_name;
            }
            if ($day_moment == DayMomentProvider::MORNING) {
                return "Buenos días " . $this->user_name;
            }
            if ($day_moment == DayMomentProvider::AFTERNOON) {
                return "Buenas tardes " . $this->user_name;
            }

            return "error en saludo";
        }

        if (preg_match("/Stop!/", $text_to_reverse) == 1) {
            return "Adios " . $this->user_name;
        }

        $reversed_text = '';

        $text_legth = strlen($text_to_reverse);
        for ($i = 0; $i < $text_legth; $i++) {
            $reversed_text[$i] = $text_to_reverse[$text_legth - $i - 1];
        }

        if (strcmp($text_to_reverse, $reversed_text) == 0) {
            $reversed_text .= "\n¡Bonita palabra!";
        }

        return $reversed_text;
    }
}
