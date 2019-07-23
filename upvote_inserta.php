<?php
session_start();
  $host = "fdb26.awardspace.net";
                      $dbusername = "3071595_sush";
                       $dbpassword = "susmita@1";
                        $dbname = "3071595_sush";

                       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(isset($_POST['task'])&& $_POST['task']=='upvote_insert')
{
	
	
     $tid=(int)$_POST['tid'];
	$std = new stdClass();
	$std->comment_id=24;
	

	$std->tid=$tid;
	$std->userName=$_SESSION['username'];
	$username=$_SESSION['username'];
$sql="SELECT upvote FROM topic WHERE topicid=$tid";
   $retval2 = mysqli_query( $conn,$sql);
           $upvote=mysqli_fetch_assoc($retval2);
           $std->upvote=(int) $upvote['upvote']+1;

$upvote1=(int) $upvote['upvote']+1;

	echo json_encode($std);

$sql = "INSERT INTO vote (username,topicid)
values ('$username','$tid')";
mysqli_query($conn, $sql);
$sql = "UPDATE topic SET upvote= '$upvote1' WHERE topicid=$tid"; 
mysqli_query($conn, $sql);
}
else
{
	header('location:/');
}
?>