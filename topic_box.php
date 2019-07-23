<?php

                       



?>



<?php foreach($topics as $key => $topic): 
	?>
 
						<?php
						$sql = "SELECT * FROM topic WHERE topicid= $count";
                       $retval = mysqli_query( $conn,$sql);
                       while($row = mysqli_fetch_array($retval))
                       {
                        echo $row['topic'];
                    }
                        $count++;
						?>
					
				
			<?php endforeach; ?>
					