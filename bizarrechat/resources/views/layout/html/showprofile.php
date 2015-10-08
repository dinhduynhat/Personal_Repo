<?php
include 'calls/getfriendsprofile.php';
include 'calls/updateOwnSession.php';
?>


<article class="right_content_left_menu2">
    	<div class="right_content_inner">
        	<div class="clear"></div>
                <h1 id="friend_name" ><span  class="profileName"></span> <img src="public/images/online.png" width="10" height="10"></h1>
                <div class="clear" style="border-bottom:#E6E6E6 solid 1px;"></div>
                <div class="clear"></div>
                <div class="profile_photo">
           	    	<img src="public/images/photo.jpg" width="178" height="164" onClick="start_gallery()"> 
                </div>
                <div class="profile_photo_edit">
                	<ul class="messages_user_right_ul" style="width:260px;">
                        <li class="messages_user_right_li messages_user_fav"><a href="#"><img style="vertical-align:bottom;" src="public/images/reply_now.jpg" width="22" height="16"> Chat now! </a></li>
                        <li class="messages_user_right_li">&nbsp;</li>
                        <li class="messages_user_right_li messages_user_fav"><a href="javascript:;">
                                
                                <span id="favyes" style="display:none">
                                    <img src="public/images/faver.png" width="13" height="12">
                                </span>
                                <span id="favno" style="display:none">
                                    <img src="public/images/faverno.png" width="13" height="12">
                                </span>
                                
                                
                                <span class = "addToFavorites">Add to Favourites</span></a>
                        
                        </li>
                        <li class="messages_user_right_li messages_user_fav_option"><a id="or5">Or</a>
                            <ul class="user_fav_option" id="or_view5">
                                <li class="user_fav_option_li like_li"><a href="javascript:;">
								
								<span class="likeStage" id="likeYes" style="display:none">Like</span>
								<span class="likeStage"id="likeNo" style="display:none">UnLike</span>
								</a></li>
                                <li class="user_fav_option_li delete_li"><a href="#">Delete</a></li>
                                <li class="user_fav_option_li block_li"><a href="javascript:;">
                                    
                                        <span class="blockStage" id="blockYes" style="display:none">Block</span>
                                        <span class="blockStage"id="blockNo" style="display:none">UnBlock</span>
                                                                
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                	<div class="clear"></div>
                    <div class="intrest_friend">Interests</div>
                    <div class="clear"></div>
                    <div id="intrest">
                    	<span><img style="vertical-align:middle;" src="public/images/music.png" width="26" height="26"> A.R. Rahman</span>
                    </div>
                </div>
                <div class="clear"></div>
                   <ul>
                   	  <li class="friend_detail_li">
                      	<h1 id="friend_title">About me</h1>
                        <h6 id="friend_content" style="width:300px;">
                            <span class="profileAboutMe"></span>
                        </h6>
                      </li>
                      <li class="friend_detail_li">
                      	<h1 id="friend_title">Relationship</h1>
                        <h6 id="friend_content">
                            <span class="profileRelationship"></span>
                        </h6>
                      </li>
                      <li class="friend_detail_li">
                      	<h1 id="friend_title">Sexuality</h1>
                        <h6 id="friend_content">
                        	<span class="profileSexuality"></span>
                        </h6>
                      </li>
                      <li class="friend_detail_li">
                      	<h1 id="friend_title">Weight</h1>
                        <h6 id="friend_content">
                        	<span class="profileWeight"></span>
                        </h6>
                      </li>
                      <li class="friend_detail_li">
                      	<h1 id="friend_title">Living</h1>
                        <h6 id="friend_content">
                        	<span class="profileLiving"></span>
                        </h6>
                      </li>
                   </ul>  
                <div class="clear"></div>
       	  <div class="clear"></div>
          <div  class="album_popup" style="display:none;">
          <a rel="prettyPhoto[gallery1]"  href="public/images/photo2.jpg" id="start_album_gallery"><img id="album_img" src="public/images/photo2.jpg" width="178" height="164"></a>
          <a rel="prettyPhoto[gallery1]"  href="public/images/photo.jpg"><img id="album_img" src="public/images/photo.jpg" width="178" height="164"></a>
          <a rel="prettyPhoto[gallery1]"  href="public/images/photo2.jpg"><img id="album_img" src="public/images/photo2.jpg" width="178" height="164"></a>
          <a rel="prettyPhoto[gallery1]"  href="public/images/photo.jpg"><img id="album_img" src="public/images/photo.jpg" width="178" height="164"></a>
      	</div>
        </div>
  </article>
  </div>
<div class="clear" style="height:30px"></div>
</body>
<script type="text/javascript" src="public/js/footer_js.js"></script> 
</html>