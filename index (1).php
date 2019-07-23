<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link href='https://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
<head >
<title>
	login
</title>

</head>
<style type="text/css">
body{
	background-image: url("bgg2.jpg");
	
	margin: 0px;
	background-size: cover;
	
 
	background-repeat: no-repeat;

}
header.sec{
		height: 65vh;
		background-color: rgba(255,255,255,0.0);
		padding-left: 25px;
		padding-right: 25px; 
		margin-top: 0px;

		
	}
	.frm1{
		position: absolute;
		
		width: 500px;
		margin-top: 0%;
		left:34%;
		padding-left: 10px;
		padding-right: 10px;
		border: 4px solid #00ccff;
		border-radius: 10px;
		font-size: 30px;
		padding-top: 20px;
		font-family: 'Eagle Lake';
		color: #ffff00;
		background-color: rgba(0,0,0,0.4);
		padding-bottom: 10px;
	
	}
	.hea{
		text-align: center;
		font-size: 80px;
		font-family: 'Gorditas';
		 animation-name: example;
         animation-duration: 4s;
         animation-iteration-count: infinite;
	}
	@keyframes example {
  0%   {color: red;}
  25%  {color: yellow;}
  50%  {color: #cc00cc;}
  100% {color: #00ff00;}
}
    .btn{
    	
    	font-size: 25px;
    	margin-bottom: 20px;
    	height: 25px;
    }
    
	.lin{
		position:absolute;
		bottom:180px;
		text-align: center;
		font-size: 29px;
		left: 38%;
		width: 400px;
		border: 2px solid black;
		animation-name: example1;
         animation-duration: 4s;
         animation-iteration-count: infinite;
         background-color: rgba(0,0,0,0.4);
         font-family: 'Allan';
         color: yellow;
	}
	@keyframes example1 {
  0%   {border-color: red;}
  25%  {border-color:yellow;}
  50%  {border-color: #cc00cc;}
  100% {border-color: #00ff00;}
}

	.log{
		margin-top: 2%;
		font-size: 60px;
		color: #660066;
		font-family: 'Autour One';
		padding-top: 10px;
	}
	.li:hover{
		color: #00ccff;
	}
	.li{
		color: white;
	}

</style>

<body>
	<center><div class="log">LOGIN!</div></center>
	<header class="sec">
		<br><br>
		
	<div class="frm1">
		
		<form action="" method="post">
			<p>Username : <input type="text" name="username" input style="font-size:20px;" value=""/><br></p>
			<p>Password : <input type="password" name="password" input style="font-size:20px;" value=""/><br></p>
			<center><span class="btn"><input type="submit" name="submit" value="Login" style = "font-size:23px"/></span></center>
		</form>

	</div>
		
  <div class="lin"><center>New user? Click <a href="sign.php" class="li" >HERE</a> to register<center></div>
</header>
</body>
<?php

$con=mysqli_connect("fdb26.awardspace.net","3071595_sush","susmita@1");

mysqli_select_db($con,"3071595_sush");


if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];



$result=mysqli_query($con,"select * from userinfo where username='".$username."' and password='".$password."'");


if(mysqli_num_rows($result)==1)
{
	{
      $rows=mysqli_fetch_array($result);
	$_SESSION['username']=$username;
	$_SESSION['name']=$rows['name'];
}


header('location:process.php');
ob_end_flush();

}
else 
{       
      
	header('location:lfail.php');
        ob_end_flush();
}
}


?>
</html>