<?php

$requestTime = $_SERVER['REQUEST_TIME'];

$date = date("Y-m-d H:i:s", $requestTime);

echo "Page Requested Time: " . $date;

?>
