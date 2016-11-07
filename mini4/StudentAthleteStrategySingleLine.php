<?php 
include_once('StudentAthleteStrategyInterface.php');
include_once('StudentAthletePerson.php');
class StudentAthleteStrategySingleLine implements StudentAthleteStrategyInterface
{
	
	
	public function showPerson($person_in)
	{
		//$person ='test';
		$person = $person_in->getFName() . ' '. $person_in->getLName() . ' '. $person_in->getMajor() . ' ' . $person_in->getGPA() . ' ' . $person_in->getSport();
		return $person;
	}
}
?>