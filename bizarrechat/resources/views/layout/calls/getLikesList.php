

<script>
$(document).ready(function(){
    
	$.ajax({
	url: 'getLikesList',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
    console.log(message);
	var par = JSON.parse(message);	
	$('#likesList').html(par.list);
	}
	});

});
</script>