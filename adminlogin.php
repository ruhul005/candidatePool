<?php 

	session_start();              
    include "connection.php";         //user login in this portion
   // if (isset($_POST['submit'])) {
    	$email    = $_POST['asmin_email'];
    	$password = $_POST['admin_pass'];
    	if (empty($email) || empty($password)) {
    		
    		echo "Please enter email and password";
    	}else{
	    	$sql="SELECT * FROM user WHERE admin_email='$email' AND admin_pass='$password'";
			$result=$con->query($sql);
			$row = $result->fetch_assoc();
		   	if($result->num_rows==1){
		   		//$_SESSION['session_data'] = $row['id'];
		   		header("location: adminpanel.html");
		   	}else{
		   		echo "Login Failed";
		   	}
		 }
    //}
 ?>




