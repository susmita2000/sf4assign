<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link href='https://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Eagle Lake' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>

<head>
 <title>Form site</title>
</head>
<style type="text/css">
body{
	background-image: url("bgg2.jpg");
	
	margin: 0px;
	background-size: cover;
	
 
	background-repeat: no-repeat;

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
	header.sec{
		height: 90vh;
		background-color: rgba(255,255,255,0.0);
		padding-left: 25px;
		padding-right: 25px; 
		margin-top: 0px;

		
	}
	.frm1{
		position: absolute;
		
		width: auto;
		 
		left:50%;
		transform: translateX(-50%);
		padding-left: 80px;
		padding-right: 80px;
		border: 4px solid #cc00ff;
		border-radius: 10px;
		font-size: 30px;
		padding-top: 20px;
		font-family: 'Eagle Lake';
		color:#ffff00;
		background-color: rgba(0,0,0,0.4);

	
	}
	.btn{
		width: auto;
    	height: 30px;
    	font-size: 20px;
    	margin-bottom: 10px;
	}
	.log{
			margin-top: 0.1%;
		font-size: 60px;
		color: #660066;
		font-family: 'Autour One';
		padding-top: 10px;
	}
</style>


<body>
	
	<center><div class="log">SIGN UP!</div></center>
	<header class="sec">
	
	<div id ="frm" class="frm1">
<form method="post" action="connect.php">
	<p>
		Name:<br>
		<input type="text"  input style="font-size: 20px" name="name"><br>
	</p>
	<p>
Username :<br>
 <input type="text"  input style="font-size: 20px" name="username"><br>
</p>
<p>
Password : 
<br><input type="password" input style="font-size: 20px" name="password"><br>
</p>
<p>
	Type : <br>
	<input type="radio" name="type" value="admin"/>Admin 
	 <input type="radio" name="type" value="user"/>User
</p>

<p>
	Date of birth :<br>
	 <input type="Date" input style="font-size: 20px" name=""><br>
</p>
<center><input type="submit" class="btn" value="Submit"></center>
	</form>

	</div>

</header>
</body>
</html>
