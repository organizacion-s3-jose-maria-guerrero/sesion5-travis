<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testEsPar(): void
    {
        $result = $this->calculator->esPar(0);
        $this->assertEquals(true, $result);
    }

   
}
