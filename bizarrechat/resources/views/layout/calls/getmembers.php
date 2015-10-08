<script>
$(document).ready(function(){

var userId = localStorage.getItem('bizarrechat_id');

	$.ajax({
	url: 'GetMembers',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
	$('#Mems').html(message);
	console.log(message);
	}
	});

});
</script>
