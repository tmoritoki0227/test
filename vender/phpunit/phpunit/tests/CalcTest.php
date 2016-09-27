<?php

require '/var/www/html/Calc.php';


class HogeTest extends PHPUnit_Framework_TestCase {
  public function testSave () {
	$calc = new Calc;
	print "aaa!";
	$this->assertEquals(2, $calc->add(1, 1));
	
  } 
}

