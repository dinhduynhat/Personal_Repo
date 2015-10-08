<script>
$(document).ready(function(){
	
	$.ajax({
	url: 'getFavoriteList',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
	var par = JSON.parse(message);	
	$('#friendsList').html(par.list);
	}
	});

});
</script>