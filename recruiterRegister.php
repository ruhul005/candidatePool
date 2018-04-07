<?php 

   include "connection.php";
   
   	$email=$_POST["email"];
   	$pass=$_POST["pass"];
   	$firstname=$_POST["firstname"];
   	$lastname=$_POST["lastname"];
    $companyname=$_POST["companyname"];

   	

   	$sql1="SELECT * FROM recruiter WHERE email='$email'";
	$result1=$con->query($sql1);
    echo "checked";
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
        
			$sql="INSERT INTO recruiter VALUES ('$firstname','$lastname','$email','$pass','$companyname')";
	   	    $result=$con->query($sql);
	   	    if($result){
	   		echo "Registration Successfully";
	   	    	header("location:recruiter.html");
	   		}else{
	   			echo "Registration Failed";
	   			 }
    }	
	//}
   	
 ?>