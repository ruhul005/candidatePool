 <?php
//updated
// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
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
    
    // mysql search query
    $query = "SELECT `firstname`, `lastname`,`username`, `email`,`phone`,`address`,`skill`,`cgpa`,`current_status`,`educational_status` FROM `user` WHERE `id` = $id LIMIT 1";
    
    $result = mysqli_query($con, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $fname = $row['firstname'];
        $lname = $row['lastname'];
		$uname=$row['username'];
        $email = $row['email'];
		 $phone = $row['phone'];
		  $add = $row['address'];
		   $skill = $row['skill'];
          $cgpa = $row['cgpa'];
		  $cur_st = $row['current_status'];
		  $edu_st = $row['educational_status'];
          
		    
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $fname = "";
            $lname = "";
            $uname= "";
            $email = "";
		    $phone = "";
		    $add = "";
		    $skill = "";
            $cgpa = "";
			$cur_st = "";
		    $edu_st = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($con);
    
}

// in the first time inputs are empty
else{
    $fname = "";
    $lname = "";
    $uname= "";
    $email = "";
    $phone = "";
    $add = "";
    $skill = "";
    $cgpa = "";
	$cur_st = "";
	$edu_st = "";
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP FIND DATA </title>

         

    </head>

    <body>

    <form action="search.php" method="post">

        Id:<input type="text" name="id"><br><br>

        First Name:<input type="text" name="firstname" value="<?php echo $fname;?>"><br><br>
        Last Name:<input type="text" name="lastname" value="<?php echo $lname;?>"><br><br>
		User Name:<input type="text" name="username" value="<?php echo $uname;?>"><br><br>
        Email:<input type="text" name="email" value="<?php echo $email;?>"><br><br>
		Phone Number:<input type="text" name="phone" value="<?php echo $phone;?>"><br><br>
		Address:<input type="text" name="address" value="<?php echo $add;?>"><br><br>
		Skill:<input type="text" name="skill" value="<?php echo $skill;?>"><br><br>
        Cgpa:<input type="text" name="cgpa" value="<?php echo $cgpa;?>"><br><br>
		Current_Status:<input type="text" name="current_status" value="<?php echo $cur_st;?>"><br><br>
		Educational_Status:<input type="text" name="educational_status" value="<?php echo $edu_st;?>"><br><br> 
        
        <input type="submit" name="search" value="Search">

           </form>

    </body>

</html>