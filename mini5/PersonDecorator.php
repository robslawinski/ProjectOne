<?php 
include_once('Person.php');


class PersonDecorator {

	protected $person;
	protected $name;

	public function __construct(Person $person_in) {
		$this->person = $person_in;
		$this->resetName();
	}

	//doing this so original object is not altered
	function resetName() {
		$this->name = $this->person->getFName(). ', ' . $this->person->getLName();
	}


	function showPerson() {
		return $this->name;
	}


}
?>