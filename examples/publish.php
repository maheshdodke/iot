<?php

require("../phpMQTT.php");

$server = "broker.mqtt-dashboard.com";     // change if necessary
$port = 1883;                     // change if necessary
$username = "";                   // set your username
$password = "";                   // set your password
$client_id = "maddy-1234567"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
	echo "DONE";
	$mqtt->publish("relay-controller", "0", 0);
	$mqtt->close();
} else {
    echo "Time out!\n";
}
