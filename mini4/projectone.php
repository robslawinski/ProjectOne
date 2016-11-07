<?php
//Class to implement design patterns: Decorator, Facade, and 
class ProgramOneInfo
{
	private $author;
	private $title;
	
	function __construct($title_in,$author_in)
	{
		$this->author = $author_in;
		$this->title = $title_in;
	}
	
	function getAuthor(){return $this->author;}
	function getTitle(){return $this->title;}
	function getAuthorAndTitle()
	{
		return $this->getTitle() . ' by ' . $this->getAuthor();
	}
}

//Factory Design Pattern
abstract class AbstractFactoryMethod
{
	abstract function makePHPBook($param);
}

class ConcreteFactoryMethod extends AbstractFactoryMethod
{
	private $context = "OReilly";
}

//Decorator Design Pattern
class BookTitleDecorator
{
	
}
?>