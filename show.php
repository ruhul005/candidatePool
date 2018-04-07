
<table style="width:600px; margin:auto; " border="5px">
       <tr><th colspan="12"><h1>User Record</h1></tr></th>
        <tr>
		<td><h2>id</h2></td>
		<td><h2>firstname</h2></td>
		<td><h2>lastname</h2></td>
		<td><h2>username</h2></td>
		<td><h2>email</h2></td>
		<td><h2>password</h2></td>
		<td><h2>phone</h2></td>
		<td><h2>address</h2></td>
		<td><h2>skill</h2></td>
		<td><h2>cgpa</h2></td>
		<td><h2>current_status</h2></td>
		<td><h2>educational_status</h2></td>
		<tr>
<?php
/*$host="localhost";   
 	$user="root";
    $pass="";
    $db_name="newviewww";  */
    include "connection.php";

   $con=new mysqli($host,$user,$pass,$db_name);
   if ($con->connect_error) {
   	die("ERROR: ".$con->connect_error);
   }
$query="select * from user";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['firstname']."</td>";	
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['password']."</td>";	
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['address']."</td>";
echo"<td>".$row['skill']."</td>";
echo"<td>".$row['cgpa']."</td>";
echo"<td>".$row['current_status']."</td>";
echo"<td>".$row['educational_status']."</td>";
echo"</tr>";
	
}
?>
            
         <!DOCTYPE html>

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
 
