<?php   

      session_start();
 	include "connection.php";  //view portion open when user successfully login
 	$sql= "SELECT * FROM user WHERE id=".$_SESSION['session_data'];
 	$result = $con->query($sql);
      if(!(isset($_SESSION['session_data']))){
            header("location: login.php");
      }else{
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <a href="logout.php">Log Out</a>
 		<table>

 			<?php  
 				$i = 1;
                  while ($row= $result->fetch_assoc()) {
                  	
             ?>

             <tr>
                   

                   <td>
                   		<a href="update.php?id=<?php echo $row['id'];?>">add more information</a>
                   		
                   </td>
             </tr>
              
             <tr>
                   

                   <td>
                   		<a href="read.php?id=<?php echo $row['id'];?>">view</a>
                   		
                   </td>
             </tr>


             <?php
             $i++;
                  }
 			?>
 		</table>
 </body>
 </html>

 <?php
      }
      ?>

