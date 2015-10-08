<script>
$(document).ready(function(){

 

$("#updateLocation").click(function()
{

var address = $("#address").html();
var info = $("#info").html();
var location = info.split(', ');
var lat = parseFloat(location[0]).toFixed(3);
var lon = parseFloat(location[1]).toFixed(3);
console.log(address);
console.log(info);
console.log(lat);
console.log(lon);
//return false;

var userId = localStorage.getItem('bizarrechat_id');
$.ajax({
	url: 'updateLocation',
	type : 'POST',	
	 data: {userId : userId, address : address, lat: lat, lon: lon},
	success: function(message)
	{
    $('#locationUpdatedResult').html('Location Updated Succesfully');
    $('#userLocation').html(address);
	console.log(message);
	}
	});

});
});
</script>

