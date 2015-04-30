<?php
	
	$db = new mysqli('127.0.0.1', 'root', '', 'Store');
	
	if($db->connect_errno){
		die("Please contact your system administrator.");
	}
	
	//Changed date_received and removed timestamp (1 and 3)
	
	$db->query("ALTER table Inventory change date_received Date_Updated date");
	
	$db->query("ALTER table Inventory modify description varchar(20)");
	
	//Done in previous query
	//$db->query("ALTER table Inventory modify date_updated date");
	
	//I decided to capitalize the description field
	$db->query("Alter table Inventory change description Description varchar(20)");
	
	//table code
	
	$result = $db->query("SELECT * FROM Inventory");
	$headings = mysqli_fetch_fields($result);
	echo "<table cellpadding=10 border=1>";
	echo "<tr>";
	echo "<td>" . $headings[1]->name . "</td>" . "<td>" . $headings[2]->name . "</td>" . "<td>" . $headings[3]->name . "</td>" . "<td>" . $headings[4]->name . "</td>" . "<td>" . $headings[5]->name . "</td>" . "<td>" . $headings[6]->name . "</td>";
	echo "</tr>";
    while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row[$headings[1]->name] . "</td>" . "<td>" . $row[$headings[2]->name] . "</td>" . "<td>" . $row[$headings[3]->name] . "</td>" . "<td>" . $row[$headings[4]->name] . "</td>" . "<td>" . $row[$headings[5]->name] . "</td>" . "<td>" . $row[$headings[6]->name] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
 
	/*
	SOURCES CITED:
	alter table tablename change oldColumn newColumn varchar(10);
	http://stackoverflow.com/questions/14043480/rename-column-name-with-php-and-mysql
	alter table tablename modify columnname VARCHAR(20);
	http://php.about.com/od/learnmysql/qt/How-To-Change-The-Size-Of-A-Mysql-Column.htm
	alter table tablename modify columnname DATE;
	http://stackoverflow.com/questions/1356866/how-do-i-change-the-data-type-for-a-column-in-mysql
	http://php.about.com/od/learnmysql/p/alter_table.htm
	http://forums.htmlhelp.com/index.php?showtopic=13686
	*/
	
?>