<!DOCTYPE html>
<html>
<body>
<?php

//Date() Function
echo "Today is ". date("Y/m/d") . "<br>";
echo "Today is ". date("Y.m.d") . "<br>";
echo "Today is ". date("Y-m-d") . "<br>";
echo "Today is ". date("l"). "<br>";
echo date("Y");

//Get Your Time Zone
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

/**
 * Create a Date with mktime()
 * mktime(hour,minute,second,month,day,year)
 *
 * */
$d=mktime(11,14,54,8,12,2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

/**
 * strtotime() function converts a human readable string to a Unix time
 */
$unixDate = strtotime("10:30pm April 15 2019");
echo "Created date is " . date("Y-m-d h:i:sa", $unixDate);

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

</body>
</html>