<?php
	include "connection.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM user WHERE Id=$id";
	$result = $con->query($sql);
	if($result){
		echo "Successfully deleted";
	}else{
		echo "Delete operation failed";
	}
?>