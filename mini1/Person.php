<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractPerson.php');
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
}
?>