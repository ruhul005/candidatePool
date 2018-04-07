<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    /*
     $host="localhost";  ///connected server index,delete,login,view,logout,read,update
 	$user="root";
    $pass="root";
    $db_name="newviewww";   /// Database name view
    */
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

<!--<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>
 

    </head>

    <body>

        <form action="delete.php" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>

            <input type="submit" name="delete" value="Delete Data">

        </form>

    </body>

</html>
-->