<?php 
include_once('StudentAthleteStrategyInterface.php');
include_once('StudentAthletePerson.php');
class StudentAthleteStrategyMultiLine implements StudentAthleteStrategyInterface
{
	 public function showPerson($person_in)
	 {
	 	$person = $person_in->getFName(). '<br/>'. $person_in->getLName(). '<br/>'. $person_in->getMajor(). '<br/>' . $person_in->getGPA() . '<br/>' . $person_in->getSport();
	 	return $person;
	 }
}
?>