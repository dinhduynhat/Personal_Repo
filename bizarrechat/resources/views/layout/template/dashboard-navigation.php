<?php $fileName = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
<div class="wrapper_inner">
<section class="left_menu">
    	<ul>
        	<li class="left_menu_li album"><a <?php if($fileName=="album") echo " class='current'"; ?> href="#/album">Album</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li travel"><a <?php if($fileName=="travel") echo " class='current'"; ?> href="#/travel">Travel</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li subscri"><a <?php if($fileName=="subscription") echo " class='current'"; ?> href="#/subscription">Subscription</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li invite"><a <?php if($fileName=="invite_friends") echo " class='current'"; ?> href="#/invite_friends">Invite Friends</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li like"><a <?php if($fileName=="liked_you") echo " class='current'"; ?> href="#/liked_you">Liked you</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li favou"><a <?php if($fileName=="favourites") echo " class='current'"; ?> href="#/favourites">Favourites</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li coins"><a <?php if($fileName=="coins") echo " class='current'"; ?> href="#/coins">Coins</a></li>
            <li class="left_menu_li2"></li>
            <li class="left_menu_li contact"><a <?php if($fileName=="contact_us") echo " class='current'"; ?> href="#/contact">Contact Us</a></li>
        </ul>
    </section>