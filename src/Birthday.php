<?php namespace levidurfee;

class Birthday {

	public function check()
	{
		$today = date("m-d");
		if($today == "07-17") {
			return true;
		} else {
			return false;
		}
	}

}
