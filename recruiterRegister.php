<?php 

   include "connection.php";
   //if (isset($_POST['submit'])) {  //register form user in this portion
   	//$req_id=$_POST["req_id"];
   	$email=$_POST["email"];
   	$pass=$_POST["pass"];
   	$firstname=$_POST["firstname"];
   	$lastname=$_POST["lastname"];
    $companyname=$_POST["companyname"];

   	
/* as we are not using photo anymore.

    Photo signUp part
   	$name=$_FILES['file']['name'];
   	$temp=$_FILES['file']['tmp_name'];
   	$type=$_FILES['file']['type'];
   	if ($type === "image/jpeg" || $type === "image/jpg" || $type === "image/png") { //check image extantion..
   		move_uploaded_file($temp, "uploads/".$name);
   	}
   	else
   	{
   		echo "only .jpeg or .jpg or .png image upload";
   	}
   	move_uploaded_file($temp, "uploads/".$name);
    */
   	$sql1="SELECT * FROM recruiter WHERE email='$email'";
	$result1=$con->query($sql1);
    echo "checked";
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
			$sql2="INSERT INTO recruiter VALUES ('',$firstname','$lastname','$email','$pass','$companyname')";
            
	   	    $result2=$con->query($sql2);
            //echo"$result";
	   	    if($con->query($sql2)){
	   		//echo "Registration Successfully";
                
	   	    	header("location:index.html");
	   		}else{
	   			echo "Registration Failed";
	   			 }
	   		}	
	//}
   	
 ?>





