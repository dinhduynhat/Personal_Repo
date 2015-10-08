<script>
$(document).ready(function(){


	$.ajax({
	url: 'GetLocation',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
	var address = jQuery.parseJSON(message);
	$('#userLocation').html(address.location);
	console.log(address.location);
	}
	});

});
</script>
