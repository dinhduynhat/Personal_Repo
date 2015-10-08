<article class="right_content">
	
   <?php
   include 'calls/updateOwnSession.php';
   
   include 'calls/updateSearchResult.php';
   
    ?>
    
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

    

    <div style="width: 780px;  height: auto;">


        

        
       

        <div id="Mems"></div>
    </div>
    

    




    <div class="clear"></div>
    <div class="page_counting" align="center">
        <div class="clear"></div>
        <ul>
            <li class="page_counting_li prev"></li>
            <li class="page_counting_li page_no current">1</li>
            <li class="page_counting_li page_no">2</li>
            <li class="page_counting_li page_no">3</li>
            <li class="page_counting_li page_no">4</li>
            <li class="page_counting_li page_no">5</li>
            <li class="page_counting_li next"></li>
        </ul>
    </div>
</article>

</div>
<div class="clear" style="height:30px"></div>
</body>
<script type="text/javascript" src="public/js/footer_js.js"></script> 
</html>