<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    
    
    // get id to delete
    $id = $_POST['id'];
    
    include "connection.php";

   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }
    
    // mysql delete query 
    $query = "DELETE FROM `user` WHERE `id` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Data Deleted';
        header("location:show.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($con);
}

?>