<?php
//Darin Peterson

date_default_timezone_set('UTC');
$todaysDate = strtotime(date('2015-03-26'));
$finalsDate = strtotime(date('2015-05-08'));

echo idate('z', DaysLeft($todaysDate, $finalsDate));

function DaysLeft($today, $finals)
{
	return $finals - $today;
}

?>