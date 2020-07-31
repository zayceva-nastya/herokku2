<?php

namespace App\Calculator;

class Calculator
{

    protected int $num1;
    protected int $num2;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sum(): float
    {
        return $this->num1 + $this->num2;
    }

    public function mul(): float
    {
        return $this->num1 * $this->num2;
    }
    public function del(): float
    {
        return $this->num1 / $this->num2;
    }
    public function min(): float
    {
        return $this->num1 - $this->num2;
    }
}
