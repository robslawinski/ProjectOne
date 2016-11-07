<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractStudent.php');
include_once('PeopleMember.php');
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
	
	public function update(AbstractMember $member) 
	{
		echo BR.BR;
		echo 'IN ' . $this->FName . ', ' . $this->LName . '  OBSERVER - NEW PEOPLE ADDED ALERT*'.BR;
		echo ' new member entered: '. $member->getMember().BR;
		echo '*IN PEOPLE OBSERVER - PEOPLE ADDED ALERT OVER*'.BR;
	}
	function getAttendance()
	{
		$temp = PeopleSingleton::getAttendanceStr();
		return $temp;
	}
	
}
?>