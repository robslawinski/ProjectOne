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

echo tagging("html");
echo tagging("head");
echo tagging("/head");
echo tagging("body");

echo "BEGIN TESTING FACTORY METHOD PATTERN";
echo tagging("br").tagging("br");

echo 'testing PersonFactoryMethod'.tagging("br");

$factoryInstance = new PersonFactoryMethod;
TestFactory($factoryInstance);

echo tagging("br");
echo "END TESTING FACTORY METHOD PATTERN";
echo tagging("br"). tagging("br");
echo "BEGIN TESTING DECORATOR METHOD PATTERN";
echo tagging("br"). tagging("br");

echo 'testing PersonFactoryMethod'.tagging("br");

PersonTest($factoryInstance);

echo tagging("/body");
echo tagging("/html");

//
//Prints out the functions of each case (Person, Student, and Student Athlete)
//
function TestFactory($factoryMethodInstance) 
{
	$test = $factoryMethodInstance->makePerson("person");
	echo 'First Name: ' .
			$test -> getFName(). tagging("br");
	
	echo 'Last Name: ' . $test -> getLName(). tagging("br");
	
	//
	// Create Person name and decorated it
	//
	$decorator = new PersonDecorator($test);
	echo 'Decorated Name: ' . $decorator->showPerson() . tagging("br") . tagging("br");
	
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
	echo 'Decorated Name: ' . $decorator->showPerson() . tagging("br");
}

//
//This function mitigates inserting HTML tags
//
function tagging($tag)
{
	return "<".$tag.">";
}
?>