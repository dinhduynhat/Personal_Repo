$(document).click(function(){
	});
	$("#profile_name_edit,#profile_add_photo,#income_me_edit,#living_me_edit,#haircolour_me_edit,#eyecolour_me_edit,#intrest_edit,#job_me_edit,#company_me_edit,#smoking_me_edit,#ispeak_me_edit,#about_me_edit,#education_me_edit,#relationship_me_edit,#sexuality_me_edit,#drinking_me_edit,#height_me_edit,#weight_me_edit,#children_me_edit,#body_type_me_edit,.about_me_cancel_button,.about_me_save_button").click(function(event){
		var rel = jQuery(this).attr('rel');
		if(rel.indexOf(',',1)==-1)
		{
		jQuery('.profile_edit_hide').not('#'+rel+',#interest_selected_show').hide();
		jQuery('#'+rel).slideToggle();
		}
		else
		{
			var rel = rel.split(',');
		jQuery('.profile_edit_hide').not('#'+rel[0]+',#'+rel[1]).hide();
		jQuery('#'+rel[0]).slideToggle();
		jQuery('#'+rel[1]).slideToggle();
		}
		event.stopPropagation();
	});
	
	$("#save_profile_name").click(function(event){ jQuery('.profile_edit_hide').hide(); event.stopPropagation(); });

	
	$(document).click(function() {
    $("#right_popup").hide();
	});

	$("#focus").click(function(event) {
    $("#right_popup").show();
    event.stopPropagation();
	});
	
	$("#profile_photo_upload_btn").click(function(event) {
		$("#upload_images_id_1").hide();
		$("#upload_images_id_2").show();
		event.stopPropagation();
	});
	
	$(document).click(function() {
    $("#or_view5").hide();
	});
	
	$("#profile_edit_select_checkbox").click(function(event) {
		jQuery('.chekbox_in_image').slideToggle();
		if($(this).html()=='Select') $(this).html('Unselect'); else $(this).html('Select');
		$('.chekbox_in_image').find('input[type=checkbox]').attr('checked',false);
		jQuery('#profile_delete_select_checkbox').hide();
	});
	$(".add_people_images_div").click(function(event) {
		if($(".chekbox_in_image").css('display')!='block' && $(".chekbox_in_image").css('display')!='list-item')
		{
			jQuery('.chekbox_in_image').slideToggle();
			$('.chekbox_in_image').find('input[type=checkbox]').attr('checked',false);
			jQuery('#profile_delete_select_checkbox').show();
			if($(this).find('input[type=checkbox]').attr('checked')=='checked') $(this).find('input[type=checkbox]').attr('checked',false); else $(this).find('input[type=checkbox]').attr('checked',true);
			event.stopPropagation();
		}
	});
	
	
	$(".chekbox_in_image").click(function(event) {
		if($(this).find('input[type=checkbox]').attr('checked')=='checked') $(this).find('input[type=checkbox]').attr('checked',false); else $(this).find('input[type=checkbox]').attr('checked',true);
		if($('.chekbox_in_image input[type=checkbox]:checked').length>0) jQuery('#profile_delete_select_checkbox').show(); else jQuery('#profile_delete_select_checkbox').hide();
		event.stopPropagation();
	});
	
	$(".chekbox_in_image input[type=checkbox]").click(function(event) {
		if($(this).find('input[type=checkbox]').attr('checked')=='checked') $(this).find('input[type=checkbox]').attr('checked',false); else $(this).find('input[type=checkbox]').attr('checked',true);
		if($('.chekbox_in_image input[type=checkbox]:checked').length>0) jQuery('#profile_delete_select_checkbox').show(); else jQuery('#profile_delete_select_checkbox').hide();
		event.stopPropagation();
	});
	
	
	$("#or5").click(function(event) {
    $("#or_view5").show();
    event.stopPropagation();
	});
	$(document).click(function() {
    $("#or_view").hide();
	});

	$("#or").click(function(event) {
    $("#or_view").show();
	$("#smily_box").hide();
    event.stopPropagation();
	});
	$(document).click(function() {
    $("#smily_box").hide();
	});

	$("#smily").click(function(event) {
    $("#smily_box").show();
	$("#or_view").hide();
    event.stopPropagation();
	});
	
	$(document).click(function() {
    $("#show_all").hide();
	});

	$("#show_new").click(function(event) {
    $("#show_all").show();
	jQuery('#search_sub_box').slideUp(500);
    event.stopPropagation();
	});
	
	//put me slide
	var slide = 8;
	var total_putme = $( "div.put_me_here_photo ul li" ).length;
	var clicked_putme_next = 0;
	function slide_image()
	{
		clicked_putme_next = 1;
		if((slide+8)<total_putme)		
		{
			var i=1;
			$( "div.put_me_here_photo ul li" ).each(function( index ) {
			  if($(this).css('display')=='block' || $(this).css('display')=='list-item')
			  {
				  if(i<8){ $(this).hide('fast'); i++; slide++; $( "div.put_me_here_photo ul li:nth-child("+slide+")" ).show('fast'); }
				  else{ return false; }
			  }
			});
		}
		else
		{
			var i=0;
			var j = total_putme - slide;
			$( "div.put_me_here_photo ul li" ).each(function( index ) {
			  if($(this).css('display')=='block' || $(this).css('display')=='list-item')
			  {
				  if(i<j){ $(this).hide('fast'); i++; slide++; $( "div.put_me_here_photo ul li:nth-child("+slide+")" ).show('fast'); }
				  else{ return false; }
			  }
			});
			jQuery('.right_arrow').css({'opacity':0.2}).attr('onclick','');
		}
	}
	
	function check_putme_reload()
	{
		setTimeout(function(){ clicked_putme_next =0; restore_putme() },2000);
	}
	
	function restore_putme()
	{
		if(clicked_putme_next==0 & slide>8)
		{
			clicked_putme_next = 1;
			slide = 8;
			var dis = 0;
			$( "div.put_me_here_photo ul li" ).each(function( index ) {
				  if(dis<8) $(this).show('fast'); else $(this).hide('fast');
				  dis++;
			});
			jQuery('.right_arrow').attr('style','').attr('onclick','slide_image()');;
		}
	}

var dis = 0;
$( "div.put_me_here_photo ul li" ).each(function( index ) {
	if($(this).css('display')=='inline-block')
	{
	  if(dis>7){ $(this).hide('fast'); shown_putme++; }
	  dis++;
	}
});
function loading()
{
$( "div.people_img img" ).each(function( index ) {
	$('.member_photo_loader').hide();
	$(this).show();
});
$( "li.messages_member img" ).each(function( index ) {
	$('.member_photo_loader').hide();
	$(this).show();
});
}
setTimeout(function() { loading(); }, 1000);
$(document).ready(function() {    
	$(".messages_member_bg").niceScroll({cursorcolor:'#656663',cursorborder:'none'});
	$(".message_box_bg").niceScroll({cursorcolor:'#656663',cursorborder:'none'});
});

$(document).ready(function(){
	$(".album_popup:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:3000, autoplay_slideshow: false,social_tools:false});
});

function start_gallery()
{
	jQuery('#start_album_gallery').click();
}