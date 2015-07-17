<?php namespace levidurfee;

/**
* Checks to see if it is Levi Durfee's birthday
* @author Levi Durfee <levi.durfee@gmail.com>
* @version 1.0.0
*/
class Birthday {

	/**
	* Check
	* @return bool
	*/
	public function check()
	{
		# Get today's month and day
		$today = date("m-d");

		# Check to see if today is July 17th
		if($today == "07-17") {
			return true;
		} else {
			return false;
		}
	}

}
