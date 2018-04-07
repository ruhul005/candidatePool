<?php 

   include "connection.php";
    {  //register form user in this portion
   	$username=$_POST["user"];
   	$email=$_POST["email"];
   	$pass=$_POST["pass"];
   	$phone=$_POST["phone"];
   	$firstname=$_POST["firstname"];
   	$lastname=$_POST["lastname"];


   	$sql1="SELECT * FROM user WHERE email='$email' OR username='$username'";
	$result1=$con->query($sql1);
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
			$sql="INSERT INTO user VALUES ('','','$firstname','$lastname','$username','$email','$pass','$phone','','','','','')";
	   	    $result=$con->query($sql);
	   	    if($result){
                
	   		
	   	    	header("location:user.html");
	   		}else{
	   			echo "Registration Failed";
	   			 }
	   		}	
	//}
   	
 ?>





