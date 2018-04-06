<?php 
     //hi ruhul
	session_start();              
    include "connection.php";         //user login in this portion
   // if (isset($_POST['submit'])) {
    	$email    = $_POST['email'];
    	$password = $_POST['password'];
    	if (empty($email) || empty($password)) {
    		
    		echo "Please enter email and password";
    	}else{
	    	$sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
			$result=$con->query($sql);
			$row = $result->fetch_assoc();
		   	if($result->num_rows==1){
		   		$_SESSION['session_data'] = $row['id'];
		   		header("location: view.php");
		   	}else{
		   		echo "Login Failed";
		   	}
		 }
    //}
 ?>




