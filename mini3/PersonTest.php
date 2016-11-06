<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */

//
//Prints the factory on the webpage
//
include_once('PersonFactoryMethod.php');
include_once('PersonDecorator.php');

include_once('StudentPersonDecorator.php');
include_once('StudentAthletePersonDecorator.php');

include_once ('PeopleMember.php');


echo tagging("html");
echo tagging("head");
echo tagging("/head");
echo tagging("body");

echo "BEGIN TESTING FACTORY, DECORATOR, AND SINGLETON METHOD PATTERN";
echo tagging("br").tagging("br");

echo 'testing PersonFactoryMethod'.tagging("br");

$factoryInstance = new PersonFactoryMethod;
TestFactory($factoryInstance);

echo tagging("br");
echo "END TESTING FACTORY, DECORATOR, AND SINGLETON METHOD PATTERN";
echo tagging("br"). tagging("br");

echo tagging("/body");
echo tagging("/html");

//
//Prints out the functions of each case (Person, Student, and Student Athlete)
//
function TestFactory($factoryMethodInstance) 
{
	echo 'debug 1'.tagging("br");
	
	$memberUpdater = new PeopleMember();
	
	$test = $factoryMethodInstance->makePerson("person");
	echo 'debug 2'.tagging("br");
	echo 'First Name: ' .
			$test->getFName() . tagging("br");
	
	echo 'Last Name: ' . $test->getLName() . tagging("br");
	
	
	//
	// Create Person name and decorated it
	//
	$decorator = new PersonDecorator($test);
	echo 'Decorated Name: ' . $decorator->showPerson() . tagging("br") . tagging("br");
	$memberUpdater->attach($test);
	
	$memberUpdater->updateMember($test->getLName() . ", " . $test->getFName());
	

	$test = $factoryMethodInstance->makePerson("student");
	echo 'First Name: ' .
			$test -> getFName(). tagging("br");
	echo 'Last Name: ' .
			$test -> getLName(). tagging("br");
	echo 'Major: ' .
			$test -> getMajor().tagging("br");
	echo 'GPA: ' . 
			$test -> getGPA(). tagging("br");
	
	//
	// Decorated Student Object
	//
	$decorator = new StudentPersonDecorator($test);
	echo 'Decorated Name: ' . $decorator->showPerson() . tagging("br"). tagging("br");
	
	$memberUpdater->attach($test);
	$memberUpdater->updateMember($test->getLName() . ", " . $test->getFName());
	
	
	$test = $factoryMethodInstance->makePerson("athlete");
	echo 'First Name: ' .
			$test -> getFName(). tagging("br");
	echo 'Last Name: ' .
			$test -> getLName(). tagging("br");
	echo 'Major: ' .
			$test -> getMajor(). tagging("br");
	echo 'GPA: ' .
			$test -> getGPA(). tagging("br");
	echo 'Sport: '.
			$test -> getSport(). tagging("br");
	//
	// Decorated Athlete Object
	//
			
	$decorator = new StudentAthletePersonDecorator($test);
	echo 'Decorated Name: ' . $decorator->showPerson($test) . tagging("br") . tagging("br");
	
	$memberUpdater->attach($test);
	$memberUpdater->updateMember($test->getLName() . ", " . $test->getFName());
}

//
//This function mitigates inserting HTML tags
//
function tagging($tag)
{
	return "<".$tag.">";
}
?>