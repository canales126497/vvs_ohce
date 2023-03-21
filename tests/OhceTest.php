<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use Deg540\PHPTestingBoilerplate\DayMomentProvider;
use PHPUnit\Framework\TestCase;
use Mockery;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function canReverseText(): void
    {
        $ohce = new Ohce(new DayMomentProvider());

        $ohce_result = $ohce->execute("hola");

        $this->assertEquals("aloh", $ohce_result);
    }

    /**
     * @test
     */
    public function canGreetMorningPerson(): void
    {
        $day_mock = new Mockery();
        $day_mock = $day_mock->mock(DayMomentProvider::class);
        $day_mock->allows()->getDayMoment()->andReturn(DayMomentProvider::MORNING);
        $ohce = new Ohce($day_mock);

        $ohce_result = $ohce->execute("ohce Pedro");

        $this->assertEquals("Buenos días Pedro", $ohce_result);
    }

    /**
     * @test
     */
    public function canGreetAfternoonPerson(): void
    {
        $day_mock = new Mockery();
        $day_mock = $day_mock->mock(DayMomentProvider::class);
        $day_mock->allows()->getDayMoment()->andReturn(DayMomentProvider::AFTERNOON);
        $ohce = new Ohce($day_mock);

        $ohce_result = $ohce->execute("ohce Pedro");

        $this->assertEquals("Buenas tardes Pedro", $ohce_result);
    }

    /**
     * @test
     */
    public function canGreetNightPerson(): void
    {
        $day_mock = new Mockery();
        $day_mock = $day_mock->mock(DayMomentProvider::class);
        $day_mock->allows()->getDayMoment()->andReturn(DayMomentProvider::NIGHT);
        $ohce = new Ohce($day_mock);

        $ohce_result = $ohce->execute("ohce Pedro");

        $this->assertEquals("Buenas noches Pedro", $ohce_result);
    }

    /**
     * @test
     */
    public function canSayGoodbyeToPerson(): void
    {
        $ohce = new Ohce(new DayMomentProvider());

        $ohce->execute("ohce Pedro");
        $ohce_result = $ohce->execute("Stop!");

        $this->assertEquals("Adios Pedro", $ohce_result);
    }

    /**
     * @test
     */
    public function canDopalindromeTexts(): void
    {
        $ohce = new Ohce(new DayMomentProvider());

        $ohce_result = $ohce->execute("oto");

        $this->assertEquals("oto\n¡Bonita palabra!", $ohce_result);
    }
}
