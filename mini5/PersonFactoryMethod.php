<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */


//abstract parent class
include_once('AbstractPersonFactory.php');

//classes to be created by the Factory (Child classes)
include_once('Person.php');
include_once('StudentPerson.php');
include_once('StudentAthletePerson.php');

class PersonFactoryMethod extends AbstractPersonFactory {
	private $context = "Robert Slawinski";
	
	//
	//makes the correct person object based on passed parameter
	//
	function makePerson($param) {
		$person = NULL;
		switch ($param) {
			case "person":
				$person = new Person;
				break;
			case "student":
				$person = new StudentPerson;
				break;
			case "athlete":
				$person = new StudentAthletePerson;
				break;
			default:
				$person = new Person;
				break;
		}
		return $person;
	}
}
?>