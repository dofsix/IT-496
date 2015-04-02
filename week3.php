<?php
	
	$testArray = array(1,2,3);
	$stringArray = array("one", "two", "three");
	
	//echo $testArray[0];
	//echo "<br/>";
	//echo $stringArray[2];
	
	
	//do-while loop
	$x = 1;
	do
	{
		//echo "This is the value: " . $x . "<br/>";
		//$x++;
		//$x+=1;
		$x = $x + 1;
	}
	while($x <= 9);
	
	
	//for loop
	
	for($i = 0; $i <= 10; $i+=2)
	{
		//echo "This is the value: " . $i . "<br/>";
	}
	
	for($i = 0; $i <= 1; $i++)
	{
		//echo "This is the value: " . $stringArray[$i] . "<br/>";
	}
	
	
	//foreach loop
	
	foreach($stringArray as $y)
	{
		//echo "This is the value: " . $y . "<br/>";
	}
	$colorArray = array("red", "blue", "yellow", "green");
	foreach($colorArray as $y)
	{
		//echo "This is the value: " . $y . "<br/>";
	}
	//true/false (!)
	
	//switch statement
	$var = "dog";
	
	switch(!$var)
	{
		case "cat":
		echo "this is a cat";
		break;
		
		case "horse":
		echo "this is a horse";
		break;
		
		case "dog":
		echo "this is a dog";
		break;
	}
	
	//why do arrays start with 0?
	
?>