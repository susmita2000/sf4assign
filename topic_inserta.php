<?php
session_start();
if(isset($_POST['task'])&& $_POST['task']=='topic_insert')
{
	
	$topic=addslashes($_POST['topic']);
    
	$std = new stdClass();


	$std->topic=$topic;
	$std->userName=$_SESSION['username'];

	echo json_encode($std);
	$host = "fdb26.awardspace.net";
$dbusername = "3071595_sush";
$dbpassword = "susmita@1";
$dbname = "3071595_sush";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO topic (topic)
values ('$topic')";
mysqli_query($conn, $sql);
}
else
{
	header('location:/');
}
?>