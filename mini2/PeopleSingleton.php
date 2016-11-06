<?php 

class PeopleSingleton {


	private static $people = NULL;
	private static $isLoanedOut = FALSE;
	private static $attendance = 0;

	private function __construct() {
	}


	static function attendClass() {
		if (NULL == self::$people) {
			self::$people = new PeopleSingleton();
		}
		self::$isLoanedOut = TRUE;
		self::$attendance = self::$attendance + 1;
		return self::$people;
	}

	function getAttendance() {return $this->attendance;}
	
	function getAttendanceStr()
	{
		echo 'PeopleSingleton:getAttendanceStr debug 1 <br>';
		return "Attendence: " . self::$attendance;
	}
	
	
}
?>