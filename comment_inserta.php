<?php
session_start();
if(isset($_POST['task'])&& $_POST['task']=='comment_insert')
{
	$userId=(int)$_POST['userId'];
	$comment=addslashes($_POST['comment']);
     $tid=(int)$_POST['tid'];
	$std = new stdClass();
	$std->comment_id=24;
	$std->userId=$userId;

	$std->comment=$comment;
	$std->tid=$tid;
	$std->userName=$_SESSION['username'];
	$username=$_SESSION['username'];
	echo json_encode($std);
	$host = "fdb26.awardspace.net";
$dbusername = "3071595_sush";
$dbpassword = "susmita@1";
$dbname = "3071595_sush";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO comment (username,comment,topicid)
values ('$username','$comment','$tid')";
mysqli_query($conn, $sql);
}
else
{
	header('location:/');
}
?>