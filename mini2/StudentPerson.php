<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractStudent.php');
//
//Student Person Object
//
class StudentPerson extends AbstractStudent 
{

	private  $FName;
	private $major;
	private  $LName;
	private $gpa;

	function __construct() 
	{
		$this->FName = 'Max';
		$this->LName  = 'Rothakanski';
		$this->major = 'Mechanical Engineering';
		$this->gpa = 3.7;
		PeopleSingleton::attendClass();
	}
	function getFName() {return $this->FName;}
	function getLName() {return $this->LName;}
	function getMajor() {return $this->major;}
	function getGPA() {return $this->gpa;}
	function getAttendance() 
	{
		$temp = PeopleSingleton::getAttendanceStr();
		return $temp;
	}
}
?>