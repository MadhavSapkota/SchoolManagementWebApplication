<?php
	 $server = 'localhost';
	 $username = 'student';
	 $password = 'student';
	 $dbname = 'lightweb';

	 $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

	 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
