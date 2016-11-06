<?php 
include_once('AbstractMember.php');

abstract class AbstractObserver {


	abstract function update(AbstractMember $person_in);


}
?>