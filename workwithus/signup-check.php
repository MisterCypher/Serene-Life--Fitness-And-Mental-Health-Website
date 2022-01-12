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
	$qualifications = validate($_POST['qualifications']);
	$question = validate($_POST['question']);
	
	$user_data = 'name='. $name. '&email='. $question. '&email='. $answer;


	if (empty($name)) {
		header("Location: index.php?error=Name is required&$user_data");
	    exit();
	}
	else if (empty($email)) {
		header("Location: index.php?error= Email is required&$user_data");
	    exit();
	}
	else if (empty($qualifications)) {
		header("Location: index.php?error=Qualification is required&$user_data");
	    exit();
	}
	else if (empty($question)) {
		header("Location: index.php?error=Answer is required&$user_data");
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
           $sql2 = "INSERT INTO workwithus(name, email, qualifications,question) VALUES('$name', '$email', '$qualifications','$question')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=We will get back to you soon");
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