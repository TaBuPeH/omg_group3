$(document).ready(function(){
	
	
	$('form').submit(function(event){
		
		event.preventDefault();
		
		$.ajax({
			url: "sendMessage.php",
			type: "POST",
			data: {message: $('#myMessage').val()},
			success: function(result) {
				
				
				
				getAllMessages()
			
				
				
				
			}
		});
		
		$('#myMessage').val("");
	});
	
	
});


function getAllMessages()
{
	
	$.ajax({
		url: "getMessages.php",
		type: "GET",
		success: function(res2) {
			
			$("#messages").html(res2);
			$('#messages').scrollTop(1000);
			
		}
	});
	
}

setInterval(getAllMessages,1000);