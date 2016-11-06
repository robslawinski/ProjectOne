<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractPerson.php');
include_once('PeopleMember.php');
define('BR', '<'.'BR'.'>');

//
//Person Object
//
class Person extends AbstractPerson {

	private $fname;
	private $lname;

	function __construct() {
		$this->fname = 'Jane';
		$this->lname  = 'Doe';
	}
	function getFName() {return $this->fname;}
	function getLName() {return $this->lname;}
	
	public function update(AbstractMember $member) {
		echo BR.BR;
		echo 'IN ' . $this->fname . ', ' . $this->lname . '  OBSERVER - NEW PEOPLE ADDED ALERT*'.BR;
		echo ' new member entered: '. $member->getMember().BR;
		echo '*IN PEOPLE OBSERVER - PEOPLE ADDED ALERT OVER*'.BR;
	}
	

}
?>