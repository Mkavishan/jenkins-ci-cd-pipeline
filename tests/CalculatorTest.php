<?php

spl_autoload_register(function($class_name) {
	include 'src/'. $class_name . '.php';
});

//require 'src/Calculator.php';

use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase {

	public function testSum() {
		$this->assertEquals(8, Calculator::sum(5, 3));
	}

	public function testDeduction()
	{
		$temp1 = new Calculator();
		$this->assertEquals(2, $temp1->deduction(5, 3));
	}

	public function test1() {
		$this->assertEquals(1, 1);
	}

	function test2() {
		$this->assertEquals(5, 5);
	}
}

?>