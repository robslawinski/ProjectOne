<?php 
/*
 * Project 1
 * @author: Robert Slawinski
 * @course: IS 218-101
 * @due date: 11/7/16
 */
include_once('AbstractPerson.php');
include_once('AbstractObserver.php');

abstract class AbstractStudent extends AbstractObserver{

	private  $personType = "Student";

}
?>