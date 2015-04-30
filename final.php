<?php

	//opening the database
	$db = new mysqli('127.0.0.1', 'root', '', 'Generated');
	
	if($db->connect_errno){
		die("Please contact your system administrator.");
	}
	
	//reading in the characters from the file
	$array_all = file("characters.txt", FILE_IGNORE_NEW_LINES);
	$passlen = 7;
	//$password = "";
	
	$str_array = implode($array_all);
	$tochars = str_split($str_array);
	shuffle($tochars);
	
	//getting a password of length passlen
	$pass = array_slice($tochars, 0, $passlen);
	$nonof = 'bs01-';
	foreach($pass as $a)
	{
		if(strpos($nonof, $a) == true)
		{
			
		}
	}
	
	//making the password a string
	$password = implode($pass);
	
	//encrypting the password
	$encrypt = crypt($password);
	//echo gettype($tochars);
	//echo $tochars[7];
	//$pass = array_slice($tochars, 7);
	//$password = implode($pass);
	echo $encrypt . "</br>";
	echo $password;	
	//print_r($pass);
	
	$sql = "INSERT INTO Generated (password) VALUES (" . $password . ")";
	
	$db->query($sql);

?>