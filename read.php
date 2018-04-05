<?php 
  
      session_start();
 	include "connection.php";  //user all information view in this portion
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
 			<tr>
 				<th>Serial</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>address</th> 
                        <th>skill</th>
                        <th>cgpa</th>
                        <th>current_status</th>
                        <th>educational_status</th>
 				<th>userName</th>
                        <th>Email</th>
 				<th>phone</th>
                        <th>image</th>
 			</tr>

 			<?php  
 				$i = 1;
                  while ($row= $result->fetch_assoc()) {
                  	
             ?>

             <tr>
                   <td><?php echo $i; ?></td>
                   <td><?php echo $row['firstname']; ?></td>
                   <td><?php echo $row['lastname']; ?></td>
                   <td><?php echo $row['address']; ?></td>
                   <td><?php echo $row['skill']; ?></td>
                   <td><?php echo $row['cgpa']; ?></td>
                   <td><?php echo $row['current_status']; ?></td>
                   <td><?php echo $row['educational_status']; ?></td>
                   <td><?php echo $row['username']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['phone']; ?></td>
                   <td><img src="uploads/<?php echo $row['image'];?>" height="100px" width="100px"/></td>

                   <td>
                   		<a href="update.php?id=<?php echo $row['id'];?>">Edit</a>
                   		
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

