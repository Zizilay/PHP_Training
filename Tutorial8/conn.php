<?php
	$db_username = 'root';
	$db_password = 'root';
	$conn = new PDO( 'mysql:host=localhost;dbname=crud', $db_username, $db_password );
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>