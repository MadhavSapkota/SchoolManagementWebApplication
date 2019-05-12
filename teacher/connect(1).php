<?php
	 $server = 'localhost';
	 $username = 'root';
	 $password = '';
	 $dbname = 'sms';

	 $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

	 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
