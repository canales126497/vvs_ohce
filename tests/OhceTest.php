<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function echosInReverse(): void
    {
        $ohce = new Ohce();

        $ohce_ressult = $ohce->reverse("hola");

        $this->assertEquals("aloh", $ohce_ressult);
    }

    /**
     * @test
     */
    public function saysGoodBye(): void
    {
        $ohce = new Ohce("Pedro");

        $goodbye_text = $ohce->goodBye();

        $this->assertEquals("Adios Pedro", $goodbye_text);
    }
}
