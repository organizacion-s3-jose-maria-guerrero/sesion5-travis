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
		$result = $this->calculator->esPar(1);
        $this->assertEquals(false, $result);
		$result = $this->calculator->esPar(2);
        $this->assertEquals(true, $result);
		$result = $this->calculator->esPar(3);
        $this->assertEquals(false, $result);
		$result = $this->calculator->esPar(-1000);
        $this->assertEquals(true, $result);
		$result = $this->calculator->esPar(1000);
        $this->assertEquals(true, $result);
		$result = $this->calculator->esPar(-1001);
        $this->assertEquals(false, $result);
		$result = $this->calculator->esPar(1001);
        $this->assertEquals(false, $result);
   
   
   
    }

   
}
