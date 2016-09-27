<?php

//require '../src/Calc.php';
//require '/home/ec2-user/git/test/vender/phpunit/phpunit/src/Calc.php';
require './src/Calc.php';


class CalcTest extends PHPUnit_Framework_TestCase {
  public function testSave () {
	$calc = new Calc;
	print "aaa!";
	$this->assertEquals(2, $calc->add(1, 1));
	
  } 
}

