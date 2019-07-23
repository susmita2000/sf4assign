  <?php
session_start();
            $host = "fdb26.awardspace.net";
                      $dbusername = "3071595_sush";
                       $dbpassword = "susmita@1";
                        $dbname = "3071595_sush";

                       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
             $sql = "SELECT MAX(topicid) as max FROM topic ";
$result=mysqli_query($conn,$sql);
            $data1=mysqli_fetch_assoc($result);
            $max=(int)$data1['max'];
               $max=$max+1;
                 $usname=$_SESSION['username'];
                 $count=1;
            ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script type="text/javascript" src="jquery.js"></script>
     <script type="text/javascript" src="comment_insert2.js?t=<?php echo time();?>"></script>
<link href='https://fonts.googleapis.com/css?family=Knewave' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
  <link href="layout.css" rel="stylesheet"/>
  <link href='https://fonts.googleapis.com/css?family=Lemonada' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <div class="topic-insert-container">
  <center><span class="enter">Enter your topic :</span></center></<br>
       <center> <textarea id="topic-post-text" class="topic-insert-text"></textarea></center><br>
      <?php
$sql = "SELECT COUNT(*) as total FROM topic ";
$result=mysqli_query($conn,$sql);
            $data=mysqli_fetch_assoc($result);
$count=(int)$data['total']+1;
?>
       <center><button type="button" class="btn1 btn-warning" id="topicsub" value="<?php echo $max;?>">SUBMIT</button></center><br>
     </div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <style type="text/css">
.co{
  border:1px outset ;
  font-size: 17px;
  padding-left: 10px;
  margin-bottom: 5px;
  background-color: #ffeee6;
}
.co:hover{
   background-color: #ffcbb3;
}
.username-field{
  font-size: 16px;
  font-weight: 700;
  color:blue;
  font-family: 'Allerta Stencil';

}
.enter{
font-family: 'Knewave';
font-size: 24px;
}
.topic-insert-text
{
  box-shadow: 5px 10px #888888;
}
.btn1{
  padding: 2px;
  font-family: cursive;
  font-size: 16px;
  border-radius: 7px;
  padding-left: 4px;
  padding-right: 4px;
}
.comment-text{
font-family: 'Lemonada';
}
.panel,
.panel-heading,
.panel-title a{
font-family: 'Almendra SC';
color:#000066;

font-size: 28px;
}
.comment-insert-text{
  font-size: 15px;
}
.comment-insert{
  background-color: white;
}

.panel-default > .panel-heading {
    margin: 8px;
    background-color: rgba(255,255,255,0.5);
}
.panel-default{
 background-color: rgba(255,255,0,0.2);
}
.panel-group{
   background-image: url("for2.jpg");
  background-size: cover;
}
.btn2
{
font-size: 14px;
padding:5px;
border-radius: 5px;
font-family: cursive;
}
.btn3{
font-size: 14px;
margin-top: 10px;
padding:7px;
border-radius: 5px;
font-family: cursive;
}
.upc{
  margin-left: 10px;
  font-size: 20px;
  color:white;
}
.downc{
    margin-left: 10px;
  font-size: 20px;
  color:white;
}
.btnx{
  font-size: 17px;
  padding: 8px;
  font-family: cursive;
  border-radius: 8px;
  margin-top: 8px;

}
.cov{
  background-color: #ffff66;
}
  </style>


       
  <div class="panel panel-default" >
<?php
$row_count = 1;
for ($x = 0; $x < $max; $x++) {  ?>

      <?php
            $sql = "SELECT * FROM topic WHERE topicid= $row_count";
                       $retval = mysqli_query( $conn,$sql);
                       if(mysqli_num_rows($retval)!=0){?>
      <div class="panel-heading" role="tab" id="heading<?php echo $row_count ?>">
        <h4 class="panel-title" style="text-align: center;">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row_count; ?>" aria-expanded="false">

                        <?php
                       while($row = mysqli_fetch_array($retval))
                       {
                        echo $row['topic'];
                    }
                    ?></a>
        </h4>
      </div>
      <div id="collapse<?php echo $row_count; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?php echo $row_count; ?>">
        <div class="panel-body" id="panel-body<?php echo $row_count;?>">
         <div class="up"> <button type="button" class="btn2 btn-success" id="btn2<?php echo $row_count?>" value="<?php echo $row_count?>">UPVOTE</button><span class="upc" id="upc<?php echo $row_count?>" value="<?php echo $row_count?>"> <?php $sql= "SELECT upvote FROM topic WHERE  topicid=$row_count ";
           $retval2 = mysqli_query( $conn,$sql);
           $upvote=mysqli_fetch_assoc($retval2);
           echo $upvote['upvote'];?></span></div>
           <div class="down"><button type="button" class="btn3 btn-danger" id="btn3<?php echo $row_count?>" value="<?php echo $row_count?>">DOWNVOTE</button><span class="downc" id="downc<?php echo $row_count?>" value="<?php echo $row_count?>"><?php $sql= "SELECT downvote FROM topic WHERE  topicid=$row_count ";
           $retval2 = mysqli_query( $conn,$sql);
           $downvote=mysqli_fetch_assoc($retval2);
           echo $downvote['downvote'];     ?></span></div>
           <input type="hidden" id="vote<?php echo $row_count?>" value="<?php
            $sql= "SELECT * FROM vote WHERE username='".$usname."' AND topicid=$row_count ";
            $retval2 = mysqli_query( $conn,$sql);
            if (mysqli_num_rows($retval2)==0)
            echo"0";
            else
            echo"1";

          ?> " />
          <input type="hidden" id="upvote<?php echo $row_count?>" value="<?php
           $sql= "SELECT upvote FROM topic WHERE  topicid=$row_count ";
           $retval2 = mysqli_query( $conn,$sql);
           $upvote=mysqli_fetch_assoc($retval2);
           echo $upvote['upvote'];
          ?>"/>
          <input type="hidden" id="downvote<?php echo $row_count?>" value="<?php
           $sql= "SELECT downvote FROM topic WHERE  topicid=$row_count ";
           $retval2 = mysqli_query( $conn,$sql);
           $downvote=mysqli_fetch_assoc($retval2);
           echo $downvote['downvote'];
          ?>"/>


        


          <div class="comment-insert">
        <h3 class="who-says"><span>Says :<?php echo $usname?></span>
          <span class="bu"><button type="button" class="btn btn-primary" id="comment-post-button<?php echo $row_count?>" value="<?php echo $row_count?>">POST</button></span>
       </h3>
        <div class="comment-insert-container">
        <textarea id="comment-post-text<?php echo $row_count; ?>" class="comment-insert-text"></textarea>
      </div>
    </div>

          <?php
 $sql = "SELECT * FROM comment WHERE topicid= $row_count";
                       $retval = mysqli_query( $conn,$sql);
                       while($row = mysqli_fetch_array($retval))
                       {?>
              
                       <div class="co" id="_1">
                                  <div class="username-field">
             <?php echo $row['username'];?>
          </div>
                        <div class="comment-text"><?php echo $row['comment'];?></div></div>
                      <?php
                    }
                    ?>
</div>
</div>


       <?php }
        $row_count++; } ?>
</div>

</div>

 
<input type="hidden" id="userName" value="<?php echo $usname?> "/>
<input type="hidden" id="userId" value="1" />
<div class="cov"><a href="logout.php"><center><button type="button" class="btnx btn-info">LOGOUT</button></center></a></div>

<script type="text/javascript">

</script>
 