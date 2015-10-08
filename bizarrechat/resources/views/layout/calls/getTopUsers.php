<script>
$(document).ready(function(){
	var userId = localStorage.getItem('bizarrechat_id');
	
	$.ajax({
	url: 'getTopUsers',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
	var par = JSON.parse(message);	
	$('#topUserList').html(par.list);
	}
	});

});
</script>