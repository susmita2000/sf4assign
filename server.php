 <?php

 include("db.php");
 
 if(isset($POST['done']))
 {
 	$topic=mysqli_real_escape_string($con,$POST['topic']);
 	$sql="INSERT INTO topic (topic) VALUES('{$topic}')";
 	mysqli_query($con,$sql);

 
 }
 else
 {
 	echo "no";
 }
 ?>