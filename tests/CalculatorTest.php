<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calculator\Calculator;


class CalculatorTest extends TestCase
{

    public function testSum()
    {

        $this->assertEquals(
            4,
            (new Calculator(2, 2))->sum()
        );

        $this->assertEquals(
            3.2,
            (new Calculator(1.5, 1.7))->sum()
        );

        $this->assertEquals(
            35.5,
            (new Calculator(3.55, 10))->mul()
        );

        $this->assertEquals(
            0.5,
            (new Calculator(1.5, 3))->del()
        );

        $this->assertEquals(
            1.8,
            (new Calculator(3.5, 1.7))->min()
        );
    }
}
