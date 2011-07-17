<?php

require_once 'PrimeFactor.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * PrimeFactor test case.
 */
class PrimeFactorTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var PrimeFactor
	 */
	private $PrimeFactor;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated PrimeFactorTest::setUp()
		

		$this->PrimeFactor = new PrimeFactor(/* parameters */);
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated PrimeFactorTest::tearDown()
		

		$this->PrimeFactor = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	public function test0(){
		
		$this->assertEquals(array(), $this->PrimeFactor->generate(0));
	}
	
	public function test1(){
		$this->assertEquals(array(),$this->PrimeFactor->generate(1));
	}
	public function test2(){
		$this->assertEquals(array(2),$this->PrimeFactor->generate(2));
	}
	public function test3(){
		$this->assertEquals(array(3),$this->PrimeFactor->generate(3));
	}
	public function test4(){
		$this->assertEquals(array(2,2),$this->PrimeFactor->generate(4));
	}
	public function test5(){
		$this->assertEquals(array(5),$this->PrimeFactor->generate(5));
	}
	public function test6(){
		$this->assertEquals(array(2,3),$this->PrimeFactor->generate(6));
	}
	public function test8(){
		$this->assertEquals(array(2,2,2),$this->PrimeFactor->generate(8));
	}
	public function test9(){
		$this->assertEquals(array(3,3),$this->PrimeFactor->generate(9));
	}
	public function test10(){
		$this->assertEquals(array(2,5),$this->PrimeFactor->generate(10));
	}
	public function test11(){
		$this->assertEquals(array(11),$this->PrimeFactor->generate(11));
	}

}

