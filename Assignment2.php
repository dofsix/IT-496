<?php
//Darin Peterson
//Assignment 2

//read file into array
$array_all = file("input.txt", FILE_IGNORE_NEW_LINES);

//initialize arrays
$array_int = array();
$array_string = array();

//sort contents of file array into integers and strings
foreach($array_all as $w)
{

	if(ctype_digit($w))
	{
		array_push($array_int, $w);
	}else
	{
		
		array_push($array_string, $w);
	}

}
//sort contents of two arrays in descending order
$sort_int = rsort($array_int);
$sort_string = rsort($array_string);
//print out contents of each array
echo "Contents of Int array: " . "<br/>";

foreach($array_int as $i)
{
	echo $i . "<br/>";
}

echo "Contents of String array: " . "<br/>";

foreach($array_string as $s)
{
	echo $s . "<br/>";
}




?>