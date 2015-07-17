<?php namespace levidurfee;

class BirthdayTest extends \PHPUnit_Framework_TestCase
{

	private $bday;

	protected function setUp()
	{
		require_once('bootstrap.php');
		$this->bday = new Birthday;
	}

	protected function tearDown()
	{
		$this->bday = null;
	}

	public function testCheck()
	{
		$result = $this->bday->check();
		$this->assertTrue($result);
	}
}