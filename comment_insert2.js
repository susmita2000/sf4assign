$(document).ready(function()
{
		var arr=Array(400);
		arr.fill(0);
console.log("peace");
$('#topicsub').click(function()
{
	console.log("peace2");
	  var id = $(this).val();
	  var id2=parseInt(id)+1
	   this.value = id2.toString();
	topic_post_btn_click(id);


});
$(document).on('click','.btn',function()
{

	console.log("peace");
	 var id = $(this).val();
	 console.log(id);

	comment_post_btn_click(id);
console.log("peace");

});
$(document).on('click','.btn2',function()
{

	
	 var id = $(this).val();
	 var idn=parseInt(id);
	 console.log(id);
var check=$("#"+"vote"+id).val();
console.log(check);
if(check==0&&arr[idn]==0)
{
	console.log("jk");
	this.value="1";
	upvote_click(id);
	arr[idn]=1;
	window.alert("Upvoted!");
	
}
else
{
window.alert("You have already voted");
}
console.log("peace");

});
$(document).on('click','.btn3',function()
{

	
	 var id = $(this).val();
	 var idn=parseInt(id);
	 console.log(id);
var check=$("#"+"vote"+id).val();
if(check==0&&arr[idn]==0 )
{
	this.value="1";
	arr[idn]=1;
	downvote_click(id);
	window.alert("Downvoted!");
	
}
else
{
window.alert("You have already voted");
}
console.log("peace");

});



});
var g3;
function upvote_click(id)
{
g3=id;
var _userName=$('#userName').val();
var _tid=g3;
var _upvote=$("#"+"upvote"+g3).val();
var _upvote1=parseInt(_upvote)+1;
var _upvote=toString(_upvote1);
$.post("upvote_inserta.php",
		{
			task:"upvote_insert",
			
			userName:_userName,
			upvote:_upvote,
			tid:_tid
		}
		) .done(
		function(data)
		{ 
			
			console.log("ResponseText:"+data);
			upvote_insert(jQuery.parseJSON(data));
			
		}
		);

}
function upvote_insert(data)
{
	console.log(data.upvote);
	$("#"+"upc"+g3).html(data.upvote);
}
function downvote_click(id)
{
g3=id;
var _userName=$('#userName').val();
var _tid=g3;
var _downvote=$("#"+"downvote"+g3).val();
var _downvote1=parseInt(_downvote)+1;
var _downvote=toString(_downvote1);
$.post("downvote_inserta.php",
		{
			task:"downvote_insert",
			
			userName:_userName,
			downvote:_downvote,
			tid:_tid
		}
		) .done(
		function(data)
		{ 
			
			console.log("ResponseText:"+data);
			downvote_insert(jQuery.parseJSON(data));
			
		}
		);

}
function downvote_insert(data)
{
	$("#"+"downc"+g3).html(data.downvote);
}
var r;



    
var g;
function comment_post_btn_click(id)

{
	console.log(id);
g=id;
console.log(g);
if(typeof g === 'undefined'|| g===null)

{
	console.log("check");
	g=g2;
}
console.log(g);
var box="comment-post-text";
	var _comment=$("#"+box+id).val();
	var _userName=$('#userName').val();
	var _userId=$('#userId').val();
	var _tid=g;

	if(_comment.length>0 )

	{
		$('.comment-insert-container').css('border','1px solid #e1e1e1' );
		$.post("comment_inserta.php",
		{
			task:"comment_insert",
			userId:_userId,
			userName:_userName,
			comment:_comment,
			tid:_tid
		}
		) .done(
		function(data)
		{ 
			console.log("yyy");
			console.log("ResponseText:"+data);
			comment_insert(jQuery.parseJSON(data));
			
		}
		);
			
		
		//console.log(_comment+"username:"+_userName);
	}
	else
	{
		$('.comment-insert-container').css('border','1px solid #ff0000' );
		console.log("text area is empty");
	}
	
	$("#"+"comment-post-text"+g).val("");
}

function comment_insert(data)
{
	console.log("hii2");
	var t='';
	
t+='<div class="co" id="_'+data.comment_id+'">';
				t+=	'<div class="username-field">'+data.userName+'</div>';
						
				t+='<div class="comment-text">'+data.comment+'</div>';
						
					
				t+='</div>';
				var na="panel-body";
				$("#"+na+g).append(t); 
			}




			var g2;
function topic_post_btn_click(id)

{

g2=id;
console.log(g2);
	var _topic=$('#topic-post-text').val();
	
var _userName=$('#userName').val();
console.log(_userName);

	if(_topic.length>0 )
	{
		$('.topic-insert-container').css('border','1px solid #e1e1e1' );
		$.post("topic_inserta.php",
		{
			task:"topic_insert",
			topic:_topic,
			userName:_userName
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

function topic_insert(data)
{
	
	var x=0;
	var t='';
      t+= '<div class="panel-heading" role="tab" id="heading">';
  
       t+= '<h4 class="panel-title" style="text-align: center;">';
          t+='<a role="button" id="lin" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="false">'+data.topic;
          
               t+='</a>' ;
         
       t+= '</h4>';
      t+='</div>';
      t+='<div id="collapse" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading">';
    
       t+= '<div class="panel-body" id="panel-body">';
    


 t+='<div class="up">';
 t+='<button type="button" class="btn2 btn-success" id="btn2" value="">'+"UPVOTE";

 t+='</button>';
 t+='<span class="upc" id="upc" value="">'+"0";
  
           
           t+='</span>';
           t+='</div>';
           t+='<div class="down">';
           t+='<button type="button" class="btn3 btn-danger" id="btn3" value="">'+"DOWNVOTE";
         
           t+='</button>';
           t+='<span class="downc" id="downc" value="">'+"0";
         
               t+='</span>';
               t+='</div>';
          t+= '<input type="hidden" id="vote" value=" ">';
         
           

          

 t+= '<div class="comment-insert">';
       t+= '<h3 class="who-says">'
       t+='<span>Says :'+data.userName;
       t+='</span>';
        t+=  '<span class="bu"><button type="button" class="btn btn-primary" id="comment-post-button"value="">';
        
        t+='POST</button>';
        t+='</span>';
       t+='</h3>';
        t+='<div class="comment-insert-container">';
        t+='<textarea id="comment-post-text" class="comment-insert-text"></textarea>';
     t+='</div>';
    t+='</div>';
				  $('.panel').append(t);
				$("#comment-post-button").attr("value",g2);
				$("#comment-post-button").attr("id","comment-post-button"+g2);
				$("#heading").attr("id","heading"+g2);
				
                $("#comment-post-text").attr("id","comment-post-text"+g2);
                      $("#lin").attr("href","#collapse"+g2);
                      $("#lin").attr("id","");
                $("#collapse").attr("id","collapse"+g2);
                   $("#panel-body").attr("id","panel-body"+g2);



                    $("#btn2").attr("id","btn2"+g2);
                   $("#btn2"+g2).attr("value",g2);
                  $("#upc").attr("id","upc"+g2);
                      $("#upc"+g2).attr("value",g2);


                     $("#btn3").attr("id","btn3"+g2);
                     $("#btn3"+g2).attr("value",g2);
                   $("#downc").attr("id","downc"+g2);
                      $("#downc"+g2).attr("value",g2);
                     
                     $("#vote").attr("value","0");
                     $("#vote").attr("id","vote"+g2);
                    
                      $("#collapse").attr("aria-labelledby","heading"+g2);
                      $("#collapse").attr("id","collapse"+g2);

                      console.log(g2);

			}
