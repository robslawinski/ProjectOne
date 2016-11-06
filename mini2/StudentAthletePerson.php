<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractStudentAthlete.php');
include_once('PeopleSingleton.php');
//
//Student Athlete Person Object
//
class StudentAthletePerson extends AbstractStudentAthlete {

	private $FName;
	private $LName;
	private $major;
	private $gpa;
	private $sport;
	
	
	function __construct() {
		$this->FName = 'Robert';
		$this->LName  = 'Slawinski';
		$this->major  = 'Web & Information Systems';
		$this->gpa  = 3.0;
		$this->sport  = 'Fencing';
		PeopleSingleton::attendClass();
		
	}
	function getFName() {return $this->FName;}
	function getLName() {return $this->LName;}
	function getMajor() {return $this->major;}
	function getGPA()	{return $this->gpa;}
	function getSport()	{return $this->sport;}
	function getAttendance()
	{
		$temp = PeopleSingleton::getAttendanceStr();
		return $temp;
	
	}
	
	
}
?>