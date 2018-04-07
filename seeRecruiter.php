<table style="width:600px; margin:auto; color:#5DADE2;" border="5px">
       <tr><th colspan="12"><h1>Recruiter Record</h1></tr></th>
        <tr>
		
		<td><h2>firstname</h2></td>
		<td><h2>lastname</h2></td>
		<td><h2>email</h2></td>
		<td><h2>password</h2></td>
		<td><h2>companyname</h2></td>
		<tr>
		 
<?php
    /*
$host="localhost";   
 	$user="root";
    $pass="root";
    $db_name="newViewww";    
*/
    include "connection.php";  
   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }
  
 
$query="select * from recruiter";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
echo"<tr>";

echo"<td>".$row['firstname']."</td>";	
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['pass']."</td>";	
echo"<td>".$row['companyname']."</td>";
echo"</tr>";
	
}

 
?>
            
        
            
    <!--
We will edit it later-

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    
    
    // get id to delete
    $id = $_POST['companyname'];
   // echo $id;
    
    // connect to mysql
    /*
     $host="localhost";  ///connected server index,delete,login,view,logout,read,update
 	$user="root";
    $pass="root";
    $db_name="newviewww";   /// Database name view
    */
    include "connection.php";

   
    
    // mysql delete query 
    $query = "DELETE FROM `recruiter` WHERE `companyname` = $id";
    
    $result = mysqli_query($con, $query);
    
    if($result)
    {
        echo 'Data Deleted';
        header("location:seeRecruiter.php");
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($con);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>
 

    </head>

    <body>

        <form action="seeRecruiter.php" method="post">

            ID TO DELETE:&nbsp;<input type="text" name="companyname" required><br><br>

            <input type="submit" name="delete" value="Delete Data">

        </form>

    </body>

</html>
-->