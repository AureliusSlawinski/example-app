<?php

namespace Tests\Unit;

use App\Services\Calculator\Calc;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }


    public function test_my_calculator(): void
    {
        $calc = new Calc();

        //Sum:
        $result = $calc->sum(2, 2);
        $this->assertEquals(4, $result);

        //Mult:
        $result = $calc->multiply(2, 3);
        $this->assertEquals(6, $result);

        //Subst:
        $result = $calc->substract(6, 3);
        $this->assertEquals(3, $result);
    }
}
