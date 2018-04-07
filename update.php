<?php

	include 'connection.php';
	$id = $_GET["id"];        //update user all information in this portion
	$sql = "SELECT * FROM user WHERE Id=$id";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();

?>
<?php
	if (isset($_POST['updateBtn'])) {
		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$skill = $_POST['skill'];
		$cgpa = $_POST['cgpa'];
		$current_status = $_POST['current_status'];
		$educational_status = $_POST['educational_status'];

		$editQuery = "UPDATE user SET firstname='$firstname',lastname='$lastname',username='$name',email ='$email',password='$password',phone='$phone',address='$address',skill='$skill',cgpa='$cgpa',current_status='$current_status',educational_status='$educational_status' WHERE Id=$id";
		$result = $con->query($editQuery);
		if($result){
			//echo "Update successful";
			header("location: read.php");
		}else{
			echo "Update failed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>firstname:</td>
			<td><input type="text" name="firstname" value="<?php echo $row['firstname']?>"></td>
		</tr>
		<tr>
			<td>lastname:</td>
			<td><input type="text" name="lastname" value="<?php echo $row['lastname']?>"></td>
		</tr>
		<tr>
			<td>user name:</td>
			<td><input type="text" name="username" value="<?php echo $row['username']?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="text" name="password" value="<?php echo $row['password']?>"></td>
		</tr>
		<tr>
			<td>phone:</td>
			<td><input type="text" name="phone" value="<?php echo $row['phone']?>"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address" value="<?php echo $row['address']?>"></td>
		</tr>
		<tr>
			<td>skill:</td>
			<td><input type="text" name="skill" value="<?php echo $row['skill']?>"></td>
		</tr>
		<tr>
			<td>cgpa:</td>
			<td><input type="text" name="cgpa" value="<?php echo $row['cgpa']?>"></td>
		</tr>
        <tr>
			<td>current_status:</td>
            
			<td><input type="text"placeholder="employeed/unemployeed/want to switch" name="current_status" value="<?php echo $row['current_status']?>"></td>
		</tr>
		<tr>
			<td>educational_status:</td>
			<td><input type="text"  name="educational_status" value="<?php echo $row['educational_status']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="updateBtn" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>