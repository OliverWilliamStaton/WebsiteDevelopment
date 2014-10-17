<?php

	/*
		Connect to the data base
	*/
	$link = mysqli_connect("localhost", "oliverstaton1989", "Takarajima1", "exampleDB");
	
	if(mysqli_connect_error()) {
		die("ERROR: Could not connect to database");
	}
	
	/*
		Use INSERT to insert items into the data base
	*/
	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Eli', 'eli@gmail.com', 'password')";
	
	//if($result = mysqli_query($link, $query)) {
	//	echo ".";
	//}
	//else {
	//	die("Error: Insert query did not work");
	//}
	
	$query = "UPDATE `users` SET `email`*'eli@hotmail.com'"
	
	/*
		Use SELECT to select items from the data base
	*/		
	$query = "SELECT * FROM users";
	
	if($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);
		
		print_r($row);
		
	}
	else {
		die("ERROR: Select query did not work");
	}

?>