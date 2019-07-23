
function topic_insert(data)
{
	
	var x=0;
	var t='';
      t+= '<div class="panel-heading" role="tab" id="heading"'+(g2);
      t+='>';
       t+= '<h4 class="panel-title" style="text-align: center;">';
          t+='<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse"'+(g2)+' aria-expanded="false">'+data.topic;
          
               t+='</a>' ;
                    t+=' <button type="button" class="btnr btn-default btn-sm" id="remove"'+(g2)+'value='+(g2);
                   
                    t+='>';
          t+='<span class="glyphicon glyphicon-remove"></span> Remove ';
        t+='</button>';
       t+= '</h4>';
      t+='</div>';
      t+='<div id="collapse"'+(g2)+'class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading"'+(g2);
      t+='>';
       t+= '<div class="panel-body" id="panel-body"'+(g2);
       t+='>';


 t+='<div class="up"> ';
 t+='<button type="button" class="btn2 btn-success" id="btn2"'+(g2)+' value='+(g2);
 t+='>'+"UPVOTE";
 t+='</button>';
 t+='<span class="upc" id="upc"'+(g2)+ 'value='+(g2);
  t+= '>'+"0";
           
           t+='</span>';
           t+='</div>';
           t+='<div class="down">';
           t+='<button type="button" class="btn3 btn-danger" id="btn3"'+(g2)+ 'value='+(g2);
           t+='>'+"DOWNVOTE";
           t+='</button>';
           t+='<span class="downc" id="downc"'+(g2)+' value='+(g2);
           t+='>'+"0";
               t+='</span>';
               t+='</div>';
          t+= '<input type="hidden" id="vote"'+(g2) +'value='+(x);
          t+='>';
           

          

 t+= '<div class="comment-insert">';
       t+= '<h3 class="who-says">'
       t+='<span>Says :'+data.userName;
       t+='</span>';
        t+=  '<span class="bu"><button type="button" class="btn btn-primary" id="comment-post-button"value="">';
        
        t+='POST</button>';
        t+='</span>';
       t+='</h3>';
        t+='<div class="comment-insert-container">';
        t+='<textarea id="comment-post-text"'+(g2)+ 'class="comment-insert-text"></textarea>';
     t+='</div>';
    t+='</div>';
				$('.panel').append(t); 
				$("#comment-post-button").attr("value",g2);
				
			}
