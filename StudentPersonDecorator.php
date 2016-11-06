<?php 
include_once('StudentPerson.php');


class StudentPersonDecorator {

	protected $person;
	protected $name;

	public function __construct(StudentPerson $person_in) {
		$this->person = $person_in;
		$this->resetName();
	}

	//doing this so original object is not altered
	function resetName() {
		$this->name = $this->person->getFName(). ', ' . $this->person->getLName() .', '. $this->person->getMajor() . ', ' . $this->person->getGPA() ;
	}


	function showPerson() {
		return $this->name;
	}


}
?>