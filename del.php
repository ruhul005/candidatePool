<?php
       $host="localhost";   
 	$user="root";
    $pass="root";
    $db_name="newviewww";    
	
   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }
    
    // mysql delete query 
    $query = "DELETE FROM `user` WHERE `id` =3";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($con);

?>
 