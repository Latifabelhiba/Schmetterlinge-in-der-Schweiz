<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'schmetterlinge';
$db_port = 8889;

// SQL Verbindung herstellen
$mysqli = new mysqli(
	$db_host,
	$db_user,
	$db_password,
	$db_db
);

// Verbindungsfehler abfangen
if ($mysqli->connect_error) {
	echo 'Errno: ' . $mysqli->connect_errno;
	echo '<br>';
	echo 'Error: ' . $mysqli->connect_error;
	exit();
}
?>