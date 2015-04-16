<?php
	
	include 'address.php';
	include 'person.php';
	//require 'address.php';
	
	$person = new Person;
	$address = new Address;
	
	echo $person->firstName = "Darin" . " " . $person->lastName = "Peterson" . " " . $person->age = 20 . "</br>";
	echo $address->street1 = "103 Cedar St." . " " . "</br>" . $address->city = "Mankato" . " " . $address->state = "MN" . " " . $address->zipCode = 56001;
	
?>