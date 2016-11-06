<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractStudentAthlete.php');
include_once('PeopleMember.php');
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
	}
	function getFName() {return $this->FName;}
	function getLName() {return $this->LName;}
	function getMajor() {return $this->major;}
	function getGPA()	{return $this->gpa;}
	function getSport()	{return $this->sport;}
	public function update(AbstractMember $member)
	{
		echo BR.BR;
		echo 'IN ' . $this->FName . ', ' . $this->LName . '  OBSERVER - NEW PEOPLE ADDED ALERT*'.BR;
		echo ' new member entered: '. $member->getMember().BR;
		echo '*IN PEOPLE OBSERVER - PEOPLE ADDED ALERT OVER*'.BR;
	}
	
	
}
?>