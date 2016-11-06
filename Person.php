<?php 
include_once('AbstractPerson.php');

class Person extends AbstractPerson {

	private $fname;

	private $lname;

	function __construct() {
		$this->fname = 'Jane';
		$this->lname  = 'Doe';
	}
	function getFName() {return $this->fname;}
	function getLName() {return $this->lname;}
}
?>