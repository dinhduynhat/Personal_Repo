<script>
$(document).ready(function(){

	$.ajax({
	url: 'GetProfile',
	type : 'POST',	
	 data: {userId : userId},
	success: function(message)
	{
        var obj = jQuery.parseJSON(message);
        $('#renderProfileName').val(obj.profile.firstname);
        $('#renderProfileName_val').html(obj.profile.firstname);
        
        //About Me
        
        $('#renderAboutMe').val(obj.profile.aboutme);
        if(obj.profile.aboutme!='')
        {
            $('.renderAboutMe_val').html(obj.profile.aboutme);
        }
        
        // Relationship
        
        
         $('#renderRelationship'+obj.profile.relationship).attr('checked',true);
        if(obj.profile.relationship!='0')
        {
            if(obj.profile.relationship=='1')
            {
                $('.renderRelationship_val').html('Single');
            }
            else if(obj.profile.relationship==2)
            {
                $('.renderRelationship_val').html('Taken');
            }
            else if(obj.profile.relationship=='3')
            {
                $('.renderRelationship_val').html('Open');
            }
            else 
            {
                $('.renderRelationship_val').html('No Answer');
            }
        }
        
        //Sexuality
        
        $('#renderSexuality'+obj.profile.sexuality).attr('checked',true);
        if(obj.profile.sexuality!='0')
        {
            if(obj.profile.sexuality=='1')
            {
                $('.renderSexuality_val').html('Straight');
            }
            else if(obj.profile.sexuality==2)
            {
                $('.renderSexuality_val').html('Open-minded');
            }
            else if(obj.profile.sexuality=='3')
            {
                $('.renderSexuality_val').html('Bisexual');
            }
            else if(obj.profile.sexuality=='4')
            {
                $('.renderSexuality_val').html('Gay');
            }
            else 
            {
                $('.renderSexuality_val').html('No Answer');
            }
        }
        
        
        
        $('#renderHeight').val(obj.profile.height);
        $('#renderHeight').val(obj.profile.height);
        if(obj.profile.weight=='1')
        {
            $('.renderHeight_val').html('No Answer');    
        }
        else 
        {
            $('.renderHeight_val').html(obj.profile.height+' kg');    
        }
        
        $('#renderWeight').val(obj.profile.weight);
        $('#renderWeight').val(obj.profile.weight);
        if(obj.profile.weight=='1')
        {
            $('.renderWeight_val').html('No Answer');    
        }
        else 
        {
            $('.renderWeight_val').html(obj.profile.weight+' kg');    
        }
        
        $('#renderBody').val(obj.profile.bodytype);
        if(obj.profile.bodytype=='0')
        {
            $('.renderBody_val').html('No Answer');
        }
        else if(obj.profile.bodytype=='1')
        {
            $('.renderBody_val').html('Slim');
        }
        else if(obj.profile.bodytype=='2')
        {
            $('.renderBody_val').html('Normal');
        }
        else if(obj.profile.bodytype=='3')
        {
            $('.renderBody_val').html('Fat');
        }
        else if(obj.profile.bodytype=='4')
        {
            $('.renderBody_val').html('Very Fat');
        }
        else
        {
            $('.renderBody_val').html('No Answer');
        }
        
        $('renderChildren'+obj.profile.children).attr('checked',true);
        
       
        if(obj.profile.children=='0')
        {
            $('.renderChildren_val').html('No Answer');
        }
        else if(obj.profile.children=='1')
        {
            $('.renderChildren_val').html('No, never');
        }
        else if(obj.profile.children=='2')
        {
            $('.renderChildren_val').html('Somday');
        }
        else if(obj.profile.children=='3')
        {
            $('.renderChildren_val').html('Already have');
        }
        else if(obj.profile.children=='4')
        {
            $('.renderChildren_val').html('Empty nest');
        }
        else
        {
            $('.renderChildren_val').html('No Answer');
        }
        
        
        $('#renderSmoking').val(obj.profile.smoking);
        if(obj.profile.smoking=='0')
        {
            $('.renderSmoking_val').html('No Answer');
        }
        else if(obj.profile.smoking=='1')
        {
            $('.renderSmoking_val').html('Yes');
        }
        else if(obj.profile.smoking=='2')
        {
            $('.renderSmoking_val').html('No');
        }
        else
        {
            $('.renderSmoking_val').html('No Answer');
        }
        
        
        $('#renderDrinking'+obj.profile.drinking).attr('checked',true);
        if(obj.profile.drinking=='0')
        {
            $('.renderDrinking_val').html('No Answer');
        }
        else if(obj.profile.drinking=='1')
        {
            $('.renderDrinking_val').html('No');
        }
        else if(obj.profile.drinking=='2')
        {
            $('.renderDrinking_val').html('No, Never');
        }
        else if(obj.profile.drinking=='3')
        {
            $('.renderDrinking_val').html('With Company');
        }
        else if(obj.profile.drinking=='4')
        {
            $('.renderDrinking_val').html('Yes, Please');
        }
        else
        {
            $('.renderDrinking_val').html('No Answer');
        }
        
        
        $('#renderEducation'+obj.profile.education).attr('checked',true);
         if(obj.profile.education=='0')
        {
            $('.renderEducation_val').html('No Answer');
        }
        else if(obj.profile.education=='1')
        {
            $('.renderEducation_val').html('School only');
        }
        else if(obj.profile.education=='2')
        {
            $('.renderEducation_val').html('Trade / Technical');
        }
        else if(obj.profile.education=='3')
        {
            $('.renderEducation_val').html('College / University');
        }
        else if(obj.profile.education=='4')
        {
            $('.renderEducation_val').html('Advanced Degree');
        }
        else
        {
            $('.renderEducation_val').html('No Answer');
        }
        
        
        //* create
       
       $('#renderJob').val(obj.profile.job);
       if(obj.profile.job=='')
       {
       $('.renderJob_val').html('No Answer');        
       }
       else
       {
       $('.renderJob_val').html(obj.profile.job);    
       }
       
        
        
       $('#renderCompany').val(obj.profile.company);
       if(obj.profile.company=='')
       {
        $('.renderCompany_val').html('No Answer');   
       }
       else
       {
        $('.renderCompany_val').html(obj.profile.company);    
       }
       
        $('#Incomerender'+obj.profile.income).attr('checked',true);
        if(obj.profile.income=='0')
        {
            $('.Incomerender_val').html('No Answer');
        }
        else if(obj.profile.income=='1')
        {
            $('.Incomerender_val').html('Low');
        }
        else if(obj.profile.income=='2')
        {
            $('.Incomerender_val').html('Average');
        }
        else if(obj.profile.income=='3')
        {
            $('.Incomerender_val').html('High');
        }
        else
        {
            $('.Incomerender_val').html('No Answer');
        }
        
        
        $('#renderEyeColor').val(obj.profile.eyecolour);
        if(obj.profile.eyecolour=='0')
        {
            $('.renderEyeColor_val').html('No Answer');
        }
        else if(obj.profile.eyecolour=='1')
        {
            $('.renderEyeColor_val').html('Black');
        }
        else if(obj.profile.eyecolour=='2')
        {
            $('.renderEyeColor_val').html('Blue');
        }
        else
        {
            $('.renderEyeColor_val').html('No Answer');
        }
        
        
        
        
        $('#renderHairColor').val(obj.profile.haircolour);
        
         if(obj.profile.haircolour=='0')
        {
            $('.renderHairColor_val').html('No Answer');
        }
        else if(obj.profile.haircolour=='1')
        {
            $('.renderHairColor_val').html('Black');
        }
        else if(obj.profile.haircolour=='2')
        {
            $('.renderHairColor_val').html('Blue');
        }
        else
        {
            $('.renderHairColor_val').html('No Answer');
        }
        
        
        $('#renderLiving').val(obj.profile.living_addr);
        
        if(obj.profile.living_addr!='')
        {
            $('.userLiving_val').html(obj.profile.living_addr);
        }
        
	}
	});
});
</script>
