<?php 


include_once('AbstractMember.php');
include_once('PeopleObserver.php');


class PeopleMember extends AbstractMember {


	private $member = NULL;


	private $observers = array();


	function __construct() 
	{
	}


	function attach(AbstractObserver $observer_in) 
	{
		//could also use array_push($this->observers, $observer_in);
		$this->observers[] = $observer_in;
	}


	function detach(AbstractObserver $observer_in) 
	{
		//$key = array_search($this->observers, $observer_in);
		foreach($this->observers as $okey => $oval) {
			if ($oval == $observer_in) {
				unset($this->observers[$okey]);
			}
		}
	}


	function notify() 
	{
		foreach($this->observers as $obs) {
			$obs->update($this);
		}
	}


	function updateMember($newMember) 
	{
		$this->member = $newMember;
		$this->notify();
	}


	function getMember() 
	{
		return $this->member;
	}


}
?>