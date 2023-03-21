<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function reverse(string $text_to_reverse): string
    {
        $reversed_text = '';

        $text_legth = strlen($text_to_reverse);
        for ($i = 0; $i < $text_legth; $i++) {
            $reversed_text[$i] = $text_to_reverse[$text_legth - $i - 1];
        }

        return $reversed_text;
    }

    public function goodBye(): string
    {
        return "Adios Pedro";
    }
}
