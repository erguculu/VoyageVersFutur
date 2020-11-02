<?php

//destination time
$destinationTime = new DateTime("2050-10-01 04:29");

echo "<h2>";
echo $destinationTime->format('M d Y A H:i');
echo "</h2>";
echo "<p>" . "Destination Time"."</p>"."<br>";

//present time
$presentTime = new DateTime("now");

echo "<h2>";
echo $presentTime->format('M d Y A H:i');
echo "</h2>";
echo "<p>" . "Present Time" . "</p>"."<br>";

//Interval between the two dates
$interval = $destinationTime->diff($presentTime);

echo "<h2>" . $interval->format('%y years, %m months, %d days, %h hours, %i minutes')."</h2>";

