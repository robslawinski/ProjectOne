<?php 


include_once('AbstractObserver.php');
include_once('PeopleMember.php');
define('BR', '<'.'BR'.'>');


class PeopleObserver extends AbstractObserver {


	public function __construct() {
	}


	public function update(AbstractMember $member) {
		echo BR.BR;
		echo '*IN PEOPLE OBSERVER - NEW PEOPLE ADDED ALERT*'.BR;
		echo ' new member entered: '. $member->getMember().BR;
		echo '*IN PEOPLE OBSERVER - PEOPLE ADDED ALERT OVER*'.BR;
	}


}
?>