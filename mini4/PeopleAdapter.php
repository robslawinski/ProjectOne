<?php 

include_once('Person.php');

class PeopleAdapter {


	private $person;


	function __construct(Person $person_in) {
		$this->person = $person_in;
	}


	function getFullName() {
		return $this->person->getFName() . ', ' . $this->person->getLName();
	}


}
?>