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

        $ohceRessult = $ohce->reverse("hola");

        $this->assertEquals("aloh", $ohceRessult);
    }
}
