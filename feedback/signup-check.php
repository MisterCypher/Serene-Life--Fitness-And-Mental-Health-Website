<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email']))
     {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$feedback = validate($_POST['feedback']);
	
	$user_data = 'name='. $name. '&email='. $feedback. '&email='. $feedback;


	if (empty($name)) {
		header("Location: index.php?error=Name is required&$user_data");
	    exit();
	}
	else if (empty($email)) {
		header("Location: index.php?error= Email is required&$user_data");
	    exit();
	}
	else if (empty($feedback)) {
		header("Location: index.php?error=Feedback is required&$user_data");
	    exit();
	}
	  else{

		// hashing the password
       
	    $sql = "SELECT * FROM users WHERE name='$name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO feedback(name, email, feedback) VALUES('$name', '$email', '$feedback')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Feedback has been given successfully");
	         exit();
           }else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}