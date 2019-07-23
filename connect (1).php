<?php
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 $name = filter_input(INPUT_POST, 'name');
 $type = $_REQUEST["type"];
 if (!empty($username)){
if (!empty($password)){
$host = "fdb26.awardspace.net";
$dbusername = "3071595_sush";
$dbpassword = "susmita@1";
$dbname = "3071595_sush";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO userinfo (username, password,name,type)
values ('$username','$password','$name','$type')";
if ($conn->query($sql)){
header('location:lsuc.php');
}
else{
header('location:sfail.php');

}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>