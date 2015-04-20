<?php

	include 'person.php';
	include 'address.php';
	
	$myInfo = ["firstName"=>"Darin", "lastName"=>"Peterson", "age"=>20, "street1"=>103, "street2"=>"Cedar St.", "city"=>"Mankato", "state"=>"MN", "zipCode"=>56001];
	
	$name = new Person;
	$address = new Address;
	
	$name->firstName = $myInfo["firstName"];
	$name->lastName = $myInfo["lastName"];
	$name->age = $myInfo["age"];
	
	$address->street1 = $myInfo["street1"];
	$address->street2 = $myInfo["street2"];
	$address->city = $myInfo["city"];
	$address->state = $myInfo["state"];
	$address->zipCode = $myInfo["zipCode"];
	
	foreach($myInfo as $i)
	{
		echo $i . "</br>";
	}

?>