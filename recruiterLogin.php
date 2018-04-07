<?php 
     //hi ruhul
	session_start();              
    include "connection.php";         //user login in this portion
   // if (isset($_POST['submit'])) {
    	$email    = $_POST['email'];
    	$password = $_POST['pass'];
    	if (empty($email) || empty($password)) {
    		
    		echo "Please enter email and password";
    	}else{
	    	$sql="SELECT * FROM recruiter WHERE email='$email' AND pass='$password'";
			$result=$con->query($sql);
			$row = $result->fetch_assoc();
		   	if($result->num_rows==1){
		   		
		   		header("location: recruiterView.php");
		   	}else{
		   		echo "Login Failed";
		   	}
		 }
    //}
 ?>




