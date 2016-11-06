<?php 
//copyright Lawrence Truett and FluffyCat.com 2007, all rights reserved


include_once('AbstractStudentAthlete.php');

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
	
}
?>