<?php

	session_start(); //this portion user logout just destroy user login....
	session_unset($_SESSION['session_data']);
	session_destroy();
	header("Location: index.html");

?>