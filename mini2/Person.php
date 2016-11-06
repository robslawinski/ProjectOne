<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractPerson.php');
include_once ('PeopleSingleton.php');
//
//Person Object
//
class Person extends AbstractPerson {

	private $fname;
	private $lname;

	function __construct() {
		echo 'Person debug 1 <br>';
		PeopleSingleton::attendClass();
		echo 'Person debug 2 <br>';
		$this->fname = 'Jane';
		$this->lname  = 'Doe';
	}
	function getFName() {return $this->fname;}
	function getLName() {return $this->lname;}
	function getAttendance()
	{
		echo 'Person:getAttendance debug 1 <br>';
		$temp = PeopleSingleton::getAttendanceStr();
		return $temp;
		
	}
}
?>