<table style="width:600px; margin:auto; color:#5DADE2;" border="5px">
       <tr><th colspan="12"><h1>Candidate Record</h1></tr></th>
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
 
