<?php 

include_once('AbstractStudent.php');

class StudentPerson extends AbstractStudent 
{

	private  $FName;
	private $major;
	private  $LName;
	private $gpa;

	function __construct() {
		$this->FName = 'Max';
		$this->LName  = 'Rothakanski';
		$this->major = 'Mechanical Engineering';
		$this->gpa = 3.7;
	}
	function getFName() {return $this->FName;}
	function getLName() {return $this->LName;}
	function getMajor() {return $this->major;}
	function getGPA() {return $this->gpa;}
}
?>