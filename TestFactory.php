<?php 
include_once('PersonFactoryMethod.php');
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
echo tagging("br");

echo tagging("/body");
echo tagging("/html");

function TestFactory($factoryMethodInstance) 
{
	$test = $factoryMethodInstance->makePerson("person");
	echo 'First Name: ' .
			$test -> getFName().tagging("br");
	echo 'Last Name: ' .
			$test -> getLName().tagging("br");
	
	$test = $factoryMethodInstance->makePerson("student");
	echo 'First Name: ' .
			$test -> getFName().tagging("br");
	echo 'Last Name: ' .
			$test -> getLName().tagging("br");
	echo 'Major: ' .
			$test -> getMajor().tagging("br");
	echo 'GPA: ' .
			$test -> getGPA().tagging("br");
	
	$test = $factoryMethodInstance->makePerson("athlete");
	echo 'First Name: ' .
			$test -> getFName().tagging("br");
	echo 'Last Name: ' .
			$test -> getLName().tagging("br");
	echo 'Major: ' .
			$test -> getMajor().tagging("br");
	echo 'GPA: ' .
			$test -> getGPA().tagging("br");
	echo 'Sport: '.
			$test -> getSport().tagging("br");
}


function tagging($tag)
{
	return "<".$tag.">";
}
?>