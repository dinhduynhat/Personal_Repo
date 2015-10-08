<script>
$(document).ready(function(){
var userId = localStorage.getItem('bizarrechat_id');
$.ajax({
	url: 'updateOwnSession',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
        localStorage.setItem('bizarrechat_id', message);
        console.log('Updated Own Session');
        console.log(message);
        $.cookie('bz_id', message);
	}
	}); 

});
</script>
