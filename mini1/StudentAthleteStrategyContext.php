<?php 
include_once('StudentAthleteStrategySingleLine.php');
include_once('StudentAthleteStrategyMultiLine.php');

class StudentAthleteStrategyContext
{
	private $strategy = NULL;
	
	//bookList is not instantiated at construct time
	public function __construct($strategyid) 
	{
		switch ($strategyid) 
		{
			case 'S':

				$this->strategy = new StudentAthleteStrategySingleLine();

				break;
			case 'M':
				$this->strategy = new StudentAthleteStrategyMultiLine();
				break;
		}
	
	}
	
	public function showMyPerson($person) 
	{
		return $this->strategy->showPerson($person);
	}
}
?>