<script>
    var userId = localStorage.getItem('bizarrechat_id');
</script>

<link rel="stylesheet" type="text/css" href="public/css/Tulytalk.css" />
<link rel="stylesheet" href="public/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="public/css/slider_css.css" />
<script src="public/js/jquery-ui.js"></script>
<script src="public/js/jquery.cookie.js"></script>
<script src="public/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="public/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="public/js/header_js.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            
            
            var places = new google.maps.places.Autocomplete(document.getElementById('addresssearch'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var name = place.name;
                var address = place.formatted_address;
                console.log(name);
                console.log(address);
                localStorage.setItem("search-city",name);
                localStorage.setItem("search-address",address);
                $('#SearchLocation').val(address);
                console.log(places);
                
                var lat = place.geometry.location.k;
                var lon = place.geometry.location.D;
                var mesg = "SearchAddress: " + address;
                
            });
        });
    </script>

<body class="body_color">
<?php 
session_start();
#header("Refresh:0");
?>

<header class="top_banner">
  <div class="wrapper_inner">
      <div class="clear"></div>
      <div class="logo"><a href="#dashboard"><img src="public/images/logo.png" width="146" height="61" /></a></div>
        <nav class="top_menu">
          <ul>
              <li class="people_neraby"><a href="welcome_page.php">People nearby</a></li>
                <li class="messages"><a>Messages</a><!--<span class="messages_count">2</span>-->
                  <?php
                  include 'html/chatArea.php'
                  ?>
                  
                </li>
            </ul>
        </nav>
      <div class="top_right" style="margin:0;">
            <div class="roght_menu"><a id="focus"><img src="public/images/photo.jpg"></a>
              <ul id="right_popup">
                  <li><a id="user_name" href="#/profile"><?php echo $_SESSION['AuthUserName']?></a></li>
                    <li><a id="setting" href="setting.php">Settings</a></li>
                    <li><a id="sign_out" ng-click="logout();" >Sign Out</a></li>
                </ul>
            </div>
      </div>
        <div class="clear"></div>
    </div>
</header>



<div class="wrapper_inner">
    <div class="clear"></div>
<div class="add_people">
      <div class="put_me_here">
          <a class="put_me_here_a" href="#"><img src="public/images/photo.jpg" width="178" height="164"></a>
          <a class="put_me_here_link">Put me here!</a>
      </div>
      <div class="put_me_here_photo">
          <div id="topUserList">
          </div>
      
      </div>
      <a class="right_arrow" onClick="slide_image()" onMouseOut="check_putme_reload()"></a>
    </div>

    <div id="put_me_here_popup">
    <div class="but_me_here_bg"></div>
    <div class="but_me_here">
        <div class="but_me_here_inner">
            <div class="but_me_here_title">
                <div class="but_me_here_title_name">Be seen by millions!</div>
                <div class="but_me_here_close"><a>X</a></div>
            </div>
            <div class="clear"></div>
            <div align="center">
                Choose your best photo. We'll display it everywhere on the site.
            </div>
            <div class="clear" style="height:25px;"></div>
            <div class="but_me_here_content">
                <div class="but_me_here_add_photo">
                <span><img src="public/images/photo.jpg" width="178" height="164"></span>
                <span><input type="file" class="but_me_add_photo" name="add_photo"></span>
                </div>
            </div>
            <div class="clear"></div>
            
            <div align="center">
                <button class="sign_up" style="width:auto;">Continue</button>
            </div>
            <div class="clear"></div>
        </div>
    </div>
   </div>   
    <div class="clear"></div>
    
    
  
    
    
    
</div>

<div class="search_bg">
    <div class="wrapper_inner">
    <div class="clear" style="height:30px;"></div>
    <div class="sub_title_1">I’m here to search people in <em id="userLocation"></em></div>
    <div class="Search_box">
        <ul>
            <li class="Search_box_li"><a class="search" id="search_box">Search</a></li>
            <li class="Search_box_li"><a href="#/dashboard" id="show_new" class="show_all">Show : <span>All</span></a>
                <ul class="show_all_popup" id="show_all">
                    <li class="show_all_popup_li"><a href="#">All</a></li>
                    <li class="show_all_popup_li"><a href="#">New</a></li>
                    <li class="show_all_popup_li"><a href="#">Online now</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clear"></div>
    <div id="search_sub_box">
        <div class="search_title" align="center">Search</div>
        <div class="clear"></div>
        <div class="search_edit">
            <form name="updateSearchForm" id="updateSearchForm">
            <div class="search_form_1">
                <h1 class="search_form_title">I'm here to</h1>
                <ul style="margin:10px 0 0 0">
                    <li class="search_li"><label class="search_content"><input type="radio" name="interestSearch" value="1">&nbsp;<img style="vertical-align:bottom;" src="public/images/new_friend.jpg" width="22" height="22">&nbsp;Make new friends</label></li>
                    <li class="search_li"><label class="search_content"><input type="radio" name="interestSearch" value="2">&nbsp;<img style="vertical-align:bottom;" src="public/images/chat.jpg" width="22" height="22">&nbsp;Chat</label></li>
                    <li class="search_li"><label class="search_content"><input type="radio" name="interestSearch" value="3">&nbsp;<img style="vertical-align:bottom;" src="public/images/date.jpg" width="22" height="22">&nbsp;Date</label></li>
                </ul>
            </div>
            <div class="search_form_2">
                <h1 class="search_form_title">With</h1>
                 <ul style="margin:10px 0 0 0">
                     <li class="search_li"><label class="search_content"><input type="checkbox" name="relationshipSearch" value="1">&nbsp;<img style="vertical-align:bottom;" src="public/images/guys.png" width="22" height="23">&nbsp;Guys</label></li>
                     <li class="search_li"><label class="search_content"><input type="checkbox" name="relationshipSearch" value="2">&nbsp;<img style="vertical-align:bottom;" src="public/images/girls.jpg" width="22" height="23">&nbsp;Girls</label></li>
                </ul>
            </div>
            <div class="search_form_3">
                <h1 class="search_form_title">Where</h1>
                <ul style="margin:10px 0 0 0">
                    <li class="search_li"><input placeholder="Type your location" class="search_text" type="text" name="addressLocation" id="addresssearch"><button class="search_text_button" id="SearchLocation"></button></li>
                </ul>
            </div>
            <div class="search_form_4">
                <h1 class="search_form_title">Interested in</h1>
                <ul style="margin:10px 0 0 0">
                    <li class="search_li">
                        <div class="search_text2" id="select_interests" data-placeholder="Select interests" tabindex="0">Select interests</div>
                        <div class="search_drop_down" id="select_interests_show"><input style="width:158px;" class="search_text" type="text" name="search"><button class="search_text_button"></button>
                        <ul>
                            <li class="search_drop_down_a">The hangover</li>
                            <li class="search_drop_down_a">American Pie</li>
                            <li class="search_drop_down_a">300</li>
                        </ul>
                        </div>
                    </li>
                    <li id="search_drop_down_result_bg"><span id="search_drop_down_result">interested name</span><span ><a id="search_drop_down_close">X</a></span></li>
                </ul>
            </div>
            <div class="clear" style="height:10px"></div>
            <div class="age_within">
                <div class="age">
                    <div class="search_form_title">Age <span class="search_form_title_2" id="age_value">19-37</span></div>
                    <div class="clear"></div>
                    <div id="slider1"></div>
                </div>
                <div class="within">
                    <div class="search_form_title">Within <span class="search_form_title_2" id="within_value">0km</span></div>
                    <div class="clear"></div>
                    <div id="slider2"></div>
                </div>
            </div>
            <div class="clear" style="height:30px"></div>
            <div>
                <ul>
                    <li><a id="extended_search">Extended search&nbsp;<img src="public/images/expand.jpg" width="9" height="7"></a><a id="extended_close">Close&nbsp;<img src="public/images/expand_c.jpg" width="9" height="7"></a>
                        
                        <ul id="extened_filters"><div class="clear"></div>
                            <li class="filter_li">
                                <select class="search_select">
                                    <option>select 1st filter</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </li>
                            <li class="filter_li">
                                <select class="search_select">
                                    <option>select 3st filter</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </li>
                            <li class="filter_li">
                                <select class="search_select">
                                    <option>select 3st filter</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </li><div class="clear" style="height:40px"></div>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <div class="search_button"><button class="update_result" name="Update resulte" id="UpdateSearchResult">Update Results</button><button type="button" id="search_cancel" class="cancel" name="Cancel">Cancel</button></div>
            </form>
           <div class="clear" style="height:2px"></div>
           
        </div>
    </div>
    <div class="clear" style="height:20px"></div>
    </div>
</div>

<div class="clear" style="height:30px;"></div>




<script>
$(document).ready(function(){
    
    
    
$(".messages").show();
$(".frameClass").show();

$(".messages").click(function()
{
console.log('clicked');
$(".messages").show();

});
});
</script>


<?php 
include ('calls/getLocation.php');
include ('calls/getTopUsers.php');
?>