<?php
	$dbhost = "localhost";
	$dbname = "midlaj";
	$dbusername = "root";
	$dbpassword = "123";
	$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
	$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>