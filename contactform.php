<?php

	include('includes/dbh.inc.php');

	$email = $full_name = $message = '';
	$errors = array('email' => '', 'full_name' => '', 'message' => '');

	if($_SERVER['REQUEST_METHOD']=="POST"){

		// check full_name
		if(empty($_POST['full_name'])){
			$errors['full_name'] = 'Please fill in your full name';
		} else{
			$full_name = $_POST['full_name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $full_name)){
				$errors['full_name'] = 'Name must be letters and spaces only';
			}
		}

		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Must be a valid email address';
			}
		}
		
		$message = $_POST['message'];


		// sql to create table

		// $sql = "CREATE TABLE IF NOT EXISTS wda_day2 (
		// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		// first_name VARCHAR(30) NOT NULL,
		// last_name VARCHAR(30) NOT NULL,
		// email VARCHAR(50),
		// message text NOT NULL
		// )ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";


		if(array_filter($errors)){
			// header('Location: index.php#contact');
			echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
			$message = mysqli_real_escape_string($conn, $_POST['message']);

			// create sql
			$sql = "INSERT INTO wda_day2_table (full_name, email, message)
			VALUES ('$full_name', '$email', '$message')";

			// save to db and check
			if (mysqli_query($conn, $sql)) {
				header('Location: index.php');
			  	// echo "Table created successfully";
			} else {
			  	echo "Error creating table: " . mysqli_error($conn);
			}
			
		}

		
		// echo $full_name."\n\n";
		// echo $email."\n\n";
		// echo $message."\n\n";

	} // end POST check

?>