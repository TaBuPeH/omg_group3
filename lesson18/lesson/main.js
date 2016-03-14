$(document).ready(function(){
	
	
	$('#tellHimHisName').click(function(){
		
		var theAsker = $("input[name='asking']:checked").val();
		
		$.ajax({
			url: "hisname.php",
			type: "POST",
			data: {asking: theAsker},
			success: function(result) {
				$('#blablabla').html(result);
			}
		});
	});
	
});