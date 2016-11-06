<?php 
include_once('StudentAthletePerson.php');


class StudentAthletePersonDecorator {

	protected $person;
	protected $name;

	public function __construct(StudentAthletePerson $person_in) {
		$this->person = $person_in;
		$this->resetName();
	}

	//doing this so original object is not altered
	function resetName() {
		$this->name = $this->person->getFName(). ', ' . $this->person->getLName() .', '. $this->person->getMajor() . ', ' . $this->person->getGPA() . ', ' . $this->person->getSport();
	}


	function showPerson() {
		return $this->name;
	}


}
?>