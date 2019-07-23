$(document).ready(function()
{

$('#topicsub').click(function()
{
	
	  var id = $(this).val();
	  var id2=parseInt(id)+1
	   this.value = id2.toString();
	topic_post_btn_click(id);


});


});
var g2;
function topic_post_btn_click(id)

{

g2=id;
	var _topic=$('#topicsub').val();
	
	console.log(_topic);

	if(_topic.length>0 )
	{
		$('.topic-insert-container').css('border','1px solid #e1e1e1' );
		$.post("topic_inserta.php",
		{
			task:"topic_insert",
			
			topic:_topic,
			
		}
		) .done(
		function(data)
		{ 
			console.log("yyy");
			console.log("ResponseText:"+data);
			topic_insert(jQuery.parseJSON(data));
			
		}
		);
			
		
		//console.log(_comment+"username:"+_userName);
	}
	else
	{
		$('.topic-insert-container').css('border','1px solid #ff0000' );
		console.log("text area is empty");
	}
	
	$('#topic-post-text').val("");
}

function comment_insert(data)
{
	console.log("hii");
	var t='';
      t+= '<div class="panel-heading" role="tab" id="heading"+g2>';
       t+= '<h4 class="panel-title" style="text-align: center;">'
          t+='<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse"+g2 aria-expanded="false">'

           
       t+= '</h4>'
      t+='</div>'
      t+='<div id="collapse"+g2 class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading"+g2>'
       t+= '<div class="panel-body" id="panel-body"+g2>'
         t+= '<div class="comment-insert">'
       t+= '<h3 class="who-says"><span>Says : David</span>'
        t+=  '<span class="bu"><button type="button" class="btn btn-primary" id="comment-post-button"+g2 value=g2>POST</button></span>'
       t+='</h3>'
        t+='<div class="comment-insert-container">'
        t+='<textarea id="comment-post-text"+g2 class="comment-insert-text"></textarea>'
     t+='</div>'
    t+='</div>'
				$('.panel panel-default').append(t); 
			}