

<script>
$(document).ready(function(){
  $( "#getCoins" ).click(function() {
  
  var payment_category = $("input[name=payment_category]").val();
  var acceptTerms = $("input[name=acceptTerms]").val();
  var payment_card_type = $("input[name=payment_card_type]").val();
  var payment_package = $("input[name=payment_package]").val();
  if($('input[name=payment_card_type]').is(':checked')) { } else {  $(".payment_card_type").show();  console.log('1');      return false;   }
  if(!$('input[name=payment_package]').is(':checked'))    {  $(".payment_package").show();    console.log('2');     return false;   }
  if(!$('input[name=acceptTerms]').is(':checked'))   {  $(".acceptTerms").show();    console.log('3');     return false;   }
  
     $(".payment_card_type").hide();
      $(".acceptTerms").hide();
       $(".payment_package").hide();
  $.ajax({
	url: 'getCoins',
	type : 'POST',	
	 data: {userId : userId,payment_category: payment_category, payment_card_type : payment_card_type, payment_package: payment_package },
	success: function(message)
	{
    console.log(message);
	var result = JSON.parse(message);	
	if(result.success==1)
        {
            $('#mainDivCoin').html('<br><br><br><div class="sub_title_1"><em id="uuserLocation">Payment Done Succesfully </em></div><br><br><br><br>');
        }
        else
        {
            $('#mainDivCoin').html('Error in Payment');
        }
        
	}
	});
});
        
	

});
</script>