
$(function() {
	$( "#slider2" ).slider({value:0,range: "min", slide: function( event, ui ) {
        $( "#within_value" ).html(ui.value+'km');
      }});
	$( "#slider1" ).slider({
      range: true,
      min: 18,
      max: 100,
      values: [ 18, 37 ],
      slide: function( event, ui ) {
        $( "#age_value" ).html(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
      }
    });
	jQuery('#search_box,#search_cancel').bind('click',function(){ jQuery('#search_sub_box').slideToggle(500); });
	jQuery('#select_interests').bind('click',function(){ jQuery('#select_interests_show').slideToggle(500); });
	jQuery('li.search_drop_down_a').bind('click',function(){ jQuery('#select_interests_show').slideToggle(500); jQuery('#search_drop_down_result_bg').show(); });	
	jQuery('#search_drop_down_close').bind('click',function(){ jQuery('#search_drop_down_result_bg').hide(); });
	jQuery('#extended_search').bind('click',function(){ jQuery(this).hide(); jQuery('#extended_close').show(); jQuery('#extened_filters').slideToggle(500); });
	jQuery('#extended_close').bind('click',function(){ jQuery(this).hide(); jQuery('#extended_search').show(); jQuery('#extened_filters').slideToggle(500); });
	jQuery('#profile_add_photo1').bind('click',function(){ jQuery('.put_me_here:before').hide('fast'); jQuery('.but_me_here').css({'top': '-100%'}); jQuery('#put_me_here_popup1').show('fast',function(){ jQuery('.but_me_here').animate({'top': '30%'}, 'fast'); }); });
	jQuery('.put_me_here_link').bind('click',function(){ jQuery('.put_me_here:before').hide('fast'); jQuery('.but_me_here').css({'top': '-100%'}); jQuery('#put_me_here_popup').show('fast',function(){ jQuery('.but_me_here').animate({'top': '30%'}, 'fast'); }); });
	jQuery('.but_me_here_close,.but_me_here_bg,#profile_photo_upload_finish_btn').bind('click',function(){ jQuery('#put_me_here_popup,#put_me_here_popup1').hide(); });
	jQuery('.messages a:first,.favouries_chatnow').bind('click',function(){ 
	
	$('html, body').animate({scrollTop: 0}); jQuery('#messages').slideToggle(500);  jQuery('#messages_inner').css({'top': '-100%'}); jQuery('#messages_inner').show('fast',function(){ jQuery('#messages_inner').animate({'top': '2%'}, 'fast'); }); });
	jQuery('.messages_close a:first').bind('click',function(){ jQuery('#messages').hide('fast'); });
	
	//reply now animation in message
	jQuery('.reply__now_a a:first').bind('click',function(){ 
	jQuery('#unread_messages_content').hide();
	$( "#unread_messages" ).animate({width: 0,height: 0},'fast',function(){ jQuery(this).hide(); jQuery('#reply_now_display').show();  });
	});
	
	//message send animation in message
	jQuery('#message_send_btn').bind('click',function(){ 
	/*jQuery('#message_commend').css({'left': '-100%'}).show('fast',function(){ jQuery(this).animate({'left': '40%'}, 'fast',function(){ jQuery(this).animate({'left': '200%',opacity:0},3000).fadeOut(); }); });*/
	$('html, body').animate({scrollTop: 0});
	jQuery('#message_commend').fadeIn(1500,function(){ jQuery(this).fadeOut(2500); });
	});
});

