<script>
$(document).ready(function(){
    
var userId = localStorage.getItem('bizarrechat_id');
$.ajax({
	url : 'getUserAddress',
	type : 'POST',
	data : {userId : userId},
	success: function(message)
	{
	$('#addresssearch').val(message);
	}
	});    

$("#UpdateSearchResult").click(function()
{
var interestSearch = $('input[name=interestSearch]:checked', '#updateSearchForm').val();
var relationshipSearch = '';
$('input:checkbox[name=relationshipSearch]:checked').each(function() 
{   relationshipSearch = relationshipSearch + $(this).val() });
var addresssearch = $('#addresssearch').val();
var ageSearchval =  $('.search_form_title span').text();
/* Age */
//console.log(ageSearchval);
var currentTime = new Date()
var year = <?php echo date('Y');?>;
if(ageSearchval=='19-370km')
{
    var FromAge = '19';
    var ToAge = '37';   
    var FromAgeYear = year - FromAge;
    var ToAgeYear = year - ToAge;
}
else
{
    var ageSearch = ageSearchval.slice(0,-3);
    var ageSearcharr = ageSearch.split(' - ');
    var FromAge = ageSearcharr[0];
    var ToAge = ageSearcharr[1];   
    var FromAgeYear = year - ageSearcharr[0];
    var ToAgeYear = year - ageSearcharr[1];
}


var month = '<?php echo date('m');?>';
var day = '<?php echo date('d');?>';

var ToYear = FromAgeYear+'-'+month+'-'+day;
var FromYear = ToAgeYear+'-'+month+'-'+day;
/* Age Ends */

if(relationshipSearch==12)
{ relationshipSearch = ''; }

$.ajax({
	url: 'updateSearchResult',
	type : 'POST',	
	 data: {interestSearch: interestSearch , relationshipSearch: relationshipSearch, addressLocation: addresssearch , fromSearch : FromYear, toSearch : ToYear},
	success: function(message)
	{
        $('#Mems').html(message);
	console.log(message);
	}
	});    
});

});
</script>
