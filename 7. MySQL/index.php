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
//	$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Eli', 'eli@gmail.com', 'password')";
//	
//	if($result = mysqli_query($link, $query)) {
//		echo ".";
//	}
//	else {
//		die("Error: Insert query did not work");
//	}
	
	
	
	/*
		Use UPDATE to update items in the data base (WHERE this condition is true (LIMIT the number of updates)
	*/
//	$query = "UPDATE `users` SET `email`='eli@hotmail.com' WHERE `id`=2 LIMIT 1";
//	$query = "UPDATE `users` SET `name`='Francis' WHERE `name`='Eli'";
//	$query = "UPDATE `users` SET `name`='Tim O\'Connell' WHERE `id`=2 LIMIT 1";
//	
//	if($result = mysqli_query($link, $query)) {
//		echo ".";
//	}
//	else {
//		die("ERROR: Update query did not work");
//	}
	
	
	
	/*
		Use SELECT to select items from the data base
	*/		
//	$name="Tim O'Connell";
	
//	$query = "SELECT * FROM users WHERE email LIKE '%gmail%'";
//	$query = "SELECT `name` FROM `users` WHERE `name`='".mysqli_real_escape_string($link, $name)."'";
//	
//	if($result = mysqli_query($link, $query)) {
//		
//		// Determine number of rows in the data base category
//		echo mysqli_num_rows($result);
//		
//		// Cycle through all valid rows
//		while($row = mysqli_fetch_array($result))
//		{
//			print_r($row);		
//		}
//	}
//	else {
//		die("ERROR: Select query did not work");
//	}

?>