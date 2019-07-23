<?php
$host = "fdb26.awardspace.net";
                      $dbusername = "3071595_sush";
                       $dbpassword = "susmita@1";
                        $dbname = "3071595_sush";

                       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                       $count1=0;



?>



<?php foreach($comments as $key1 => $comment): 
	?>
<li class="comment-holder" id=_1>
					<h3 class="username-field">
						David
					</h3>
					<div class="comment-text">
						<?php
						$sql = "SELECT * FROM comment WHERE commentid= $comments[$count1]";
						$count1++;
                       $retval = mysqli_query( $conn,$sql);
                       while($row = mysqli_fetch_array($retval))
                       {
                        echo $row['comment'];
                    }
                        $count1++;
						?>
					</div>
				</li>
			<?php endforeach; ?>
					