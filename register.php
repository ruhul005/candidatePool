<?php 

   include "connection.php";
   //if (isset($_POST['submit'])) {  //register form user in this portion
   	$username=$_POST["user"];
   	$email=$_POST["email"];
   	$pass=$_POST["pass"];
   	$phone=$_POST["phone"];
   	$firstname=$_POST["firstname"];
   	$lastname=$_POST["lastname"];
   	//$NID=$_POST["NID"];
   	//$bkash=$_POST["bkash"];
   	//$rocket=$_POST["rocket"];
   	//$bank=$_POST["bank"];
   	//$educational_status=$_POST["educational_status"];
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
   	$sql1="SELECT * FROM user WHERE email='$email' OR username='$username'";
	$result1=$con->query($sql1);
	
	if ($result1->num_rows > 0) {             //check email address if exist
		echo "This email or username is already exist";
		exit;

	}else{
			$sql="INSERT INTO user VALUES ('','','$firstname','$lastname','$username','$email','$pass','$phone','','','','','')";
	   	    $result=$con->query($sql);
	   	    if($result){
	   		//echo "Registration Successfully";
	   	    	header("location:index.html");
	   		}else{
	   			echo "Registration Failed";
	   			 }
	   		}	
	//}
   	
 ?>





