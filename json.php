<?php

$url = "http://www.hamburg.ccc.de/~chris/dooris";
$ch = curl_init();
$timeout = 5; // set to zero for no timeout
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$x = curl_exec($ch);
curl_close($ch);

$door = trim(substr($x, 0, 1));
$time = trim(substr($x, 1));

$array = array("door" => $door, "time" => $time);
echo json_encode($array);

?>
