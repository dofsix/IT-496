<?php
	
	$db = new mysqli('127.0.0.1', 'root', '', 'Store');
	
	if($db->connect_errno){
		die("Please contact your system administrator.");
	}
	
	$db->query("ALTER table Inventory change date_received date_updated date");
	/*
	alter table tablename change oldColumn newColumn varchar(10);
	http://stackoverflow.com/questions/14043480/rename-column-name-with-php-and-mysql
	*/
	$db->query("ALTER table Inventory modify description varchar(20)");
	/*
	alter table tablename modify columnname VARCHAR(20);
	http://php.about.com/od/learnmysql/qt/How-To-Change-The-Size-Of-A-Mysql-Column.htm
	*/
	$db->query("ALTER table Inventory modify date_updated date");
	/*
	alter table tablename modify columnname DATE;
	http://stackoverflow.com/questions/1356866/how-do-i-change-the-data-type-for-a-column-in-mysql
	http://php.about.com/od/learnmysql/p/alter_table.htm
	*/
	/*
	//table code
	http://forums.htmlhelp.com/index.php?showtopic=13686
	*/
	$result = $db->query("SELECT * FROM Inventory");
	
	echo "<table cellpadding=10 border=1>";
	
    while($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row['Inventory_Id'] . "</td>" . "<td>" . $row['Part_Number'] . "</td>" . "<td>" . $row['description'] . "</td>" . "<td>" . $row['Quantity'] . "</td>" . "<td>" . $row['Price'] . "</td>" . "<td>" . $row['date_updated'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
 
	
?>