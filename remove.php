<?php
session_start();
  $host = "fdb26.awardspace.net";
                      $dbusername = "3071595_sush";
                       $dbpassword = "susmita@1";
                        $dbname = "3071595_sush";

                       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(isset($_POST['task'])&& $_POST['task']=='remove')
{
	
	
     $tid=(int)$_POST['tid'];
     $sql="DELETE FROM topic WHERE topicid=$tid";
	$retval2 = mysqli_query( $conn,$sql);
	$sql="DELETE FROM comment WHERE topicid=$tid";
	$retval2 = mysqli_query( $conn,$sql);
	$sql="DELETE FROM vote WHERE topicid=$tid";
	$retval2 = mysqli_query( $conn,$sql);
}