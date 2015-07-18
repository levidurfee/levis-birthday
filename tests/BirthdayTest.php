<?php namespace levidurfee;

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(dirname(__FILE__)));

class BirthdayTest extends \PHPUnit_Framework_TestCase
{

	private $bday;

	protected function setUp()
	{
		require_once(ROOT . DS . 'src' . DS . 'Birthday.php');
		$this->bday = new Birthday;
	}

	protected function tearDown()
	{
		$this->bday = null;
	}

	public function testCheck()
	{
		$result = $this->bday->check();
		if(date("m-d") == "07-17") {
			$this->assertTrue($result);
		} else {
			$this->assertFalse($result);
		}
	}
}