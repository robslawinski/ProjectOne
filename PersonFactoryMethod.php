<?php 
include_once('AbstractPersonFactory.php');

include_once('Person.php');
include_once('StudentPerson.php');
include_once('StudentAthletePerson.php');

class PersonFactoryMethod extends AbstractPersonFactory {
	private $context = "Robert Slawinski";
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