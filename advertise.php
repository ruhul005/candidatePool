<?php

	include 'connection.php'; //connectiong databse
	$id = $_GET["id"];        //update user all information in this portion
	$sql = "SELECT id FROM user WHERE Id=$id";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();

?>
<?php

if (isset($_POST['updateBtn'])){

	$id = $_POST['idnumber'];
    $advertise = $_POST['advertise'];
    $sql="INSERT INTO advertise VALUES ('','$advertise','$id')";
	   	    $result=$con->query($sql);
	   	    if($result){
	   		echo "Successfully insert advertise";
	   	    	//header("location:index.html");
	   		}else{
	   			echo "Failed to insert advertise";
	   			 }
}

?>
<?php
 $sqll="SELECT * FROM advertise WHERE user_id=$id order by id desc";
 $resultt = $con->query($sqll);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="logout.php">Log Out</a>
  <form method="post" action="">
  	<table>
  	<tr>
  		
  		<td>
  			<td><input type="hidden" name="idnumber" value="<?php echo $row['id']?>"></td>
  		</td>
  	</tr>
  	<tr>
  		<td>work for</td>
  		<td>
  			<td><input type="text" name="advertise" value=""></td>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			<td><input type="submit" name="updateBtn" value="submit"></td>
  		</td>
  	</tr>
  </table>
  </form>
  <table>
  	<tr>
  		<th>advertise</th>
  		<th>user_id</th>
  	</tr>
  	<?php
  	$i = 1;
     while ($row = $resultt->fetch_assoc()){ ?>
     <tr>
     	
     		<td><?php echo $row['advertise_name']; ?></td>
     	    <td><?php echo $row['user_id']; ?></td>
     </tr>
    
    <?php 
    $i++;	
     }
  	?>
  </table>
</body>
</html>