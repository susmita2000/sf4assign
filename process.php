<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head >
<title>
	welcome
</title>

</head>
<style type="text/css">
	h3{
		text-align: center;
		font-size: 60px;
	}
	.info{
		font-size: 25px;
		text-align: center;
	}
	.btn{
		margin: auto;
		font-size: 22px;
	}
      body{
    background-image: url("bgg2.jpg");
    background-size: cover;
    font-family: cursive;
  }
  h2{
  	text-align: center;
  	font-size: 40px;
  }
  .card{
  	margin: auto;
  	width:900px;
  	padding-left: 40px;
  	padding-right: 40px;
  	padding-top: 40px;
  }



</style>

<body>
	<br>
	<br>
<?php

$con=mysqli_connect("fdb26.awardspace.net","3071595_sush","susmita@1");

mysqli_select_db($con,"3071595_sush");
$username=$_SESSION['username'];

	?>
	<div class="card bg-success text-white">
    <div class="card-body">
<h3>WELCOME <?php echo $_SESSION['name'];?></h3><br><br><br>
 <?php
$sql="SELECT type FROM userinfo WHERE username='".$username."'";
$query=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($query);
if($data['type']=="admin")
{

 ?>
<h2>Click <a href="test2.php">here</a> to view discussion</h2><br><br>
<?php
}
else{
?>
<h2>Click <a href="test.php">here</a> to view discussion</h2><br><br>
<?php 
}?>
</div>
</div>

</body>
</html>
