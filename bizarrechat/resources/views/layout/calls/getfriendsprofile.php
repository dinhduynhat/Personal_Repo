<script>
        
    function assigner(){
        var scope = angular.element($("#friend_name")).scope(); 
        var profile = scope.userid;
        user_id = $.cookie('bz_id');
        
        $.ajax({
	url: 'checkFavorite',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        var par = JSON.parse(message);
        if(par.success==1)
        {
            $("#favyes").show();
            $("#favno").hide();
        }
        else
        {
            $("#favyes").hide();
            $("#favno").show();
        }
	}
	}); 
        
        
        $.ajax({
	url: 'checkLikes',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        var par = JSON.parse(message);
        console.log('mm');
        console.log(par.success);
        if(par.success==1)
        {
            $("#likeYes").hide();
            $("#likeNo").show();
        }
        else
        {
            $("#likeYes").show();
            $("#likeNo").hide();
        }
	}
	});
        
        $.ajax({
	url: 'checkBlock',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        var par = JSON.parse(message);
        console.log('mm');
        console.log(par.success);
        if(par.success==1)
        {
            $("#blockYes").hide();
            $("#blockNo").show();
        }
        else
        {
            $("#blockYes").show();
            $("#blockNo").hide();
        }
	}
	});
        
         $(".blockStage").click(function(){
        console.log(user_id);
    $.ajax({
	url: 'addToBlock',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        $("#blockYes").toggle();
        $("#blockNo").toggle();
	}
	}); 
        });
        
        $(".likeStage").click(function(){
        console.log(user_id);
    $.ajax({
	url: 'addToLikes',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        $("#likeYes").toggle();
        $("#likeNo").toggle();
	}
	}); 
        });
        
        
        $(".addToFavorites").click(function(){
        console.log(user_id);
    $.ajax({
	url: 'addToFavorites',
	type : 'POST',	
	 data: {userid: user_id, friendid: profile},
	success: function(message)
	{
        $("#favno").toggle();
        $("#favyes").toggle();
	}
	}); 
        });


        $.ajax({
	url: 'getFriendProfile',
	type : 'POST',	
	 data: {profileId : profile},
	success: function(message)
        {	
        console.log('start profile');
        var obj = jQuery.parseJSON( message );
        if(obj.success==1)
        {
        var birthdate = new Date(obj.profile.dob);
        var cur = new Date();
        var diff = cur-birthdate;
        var age = Math.floor(diff/31536000000);

        if(obj.profile.dob=='0000-00-00')
        {
            $('.profileName').html(obj.profile.firstname);
        }
        else
        {
            $('.profileName').html(obj.profile.firstname+', '+age);            
        }


        
        $('.profileAboutMe').html(obj.profile.aboutme);
        
        if(obj.profile.relationship==1)
        { var relationship = 'Single'; }
        else if(obj.profile.relationship==2)
        { var relationship = 'Taken'; }
        else if(obj.profile.relationship==2)
        { var relationship = 'Taken'; }
        else { var relationship = 'No Answer'; }
        $('.profileRelationship').html(relationship);
        
        if(obj.profile.sexuality==1)
        { var sexuality = 'Straight'; }
        else if(obj.profile.sexuality==2)
        { var sexuality = 'Open-minded'; }
        else if(obj.profile.sexuality==2)
        { var sexuality = 'Bisexual'; }
        else if(obj.profile.sexuality==3)
        { var sexuality = 'Gay'; }
        else { var sexuality = 'No Answer'; }
        $('.profileSexuality').html(sexuality);

        $('.profileWeight').html(obj.profile.weight+' kg');
        $('.profileLiving').html(obj.profile.living_addr);
        
        
        
        
        }
        else
        {
        console.log('Profile Not Exist');
        }
        
	}
        
        
        
        
	});
        console.log('end get friend id');

   } 
</script>

<script>
$(document).ready(function(){




});
</script>
