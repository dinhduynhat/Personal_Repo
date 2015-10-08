
<script type="text/javascript">
        $(document).ready(function(){
            console.log('start profile');
            var places = new google.maps.places.Autocomplete(document.getElementById('renderLiving'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var name = place.name;
                var address = place.formatted_address;
                console.log(name);
                console.log(address);
                localStorage.setItem("cli-city",name);
                localStorage.setItem("cli-address",address);
                $('#renderLiving').val(address);
                console.log(places);
                
                var lat = place.geometry.location.k;
                var lon = place.geometry.location.D;
                var mesg = "renderLiving: " + address;
                
            });
            console.log('end profile');
        });
    </script>
<?php
include 'calls/getprofile.php';
?>
    
<article class="right_content_left_menu2">
    <div class="right_content_inner">
        <div class="clear"></div>
        <h1 id="renderProfileName_val"></h1><a id="profile_name_edit" rel="profile_name_edit_box">Edit <img src="public/images/edit.png" width="18" height="17"></a>
        <div id="profile_name_edit_box" class="profile_edit_hide">
            <input type="text" class="text_box1" name="ProfileName" placeholder="Type your Name" ng-model="userProfileName" id="renderProfileName">&nbsp;&nbsp;
            <button class="update_result" style="padding:8px 10px" type="button" id="save_profile_name" ng-click="updateProfileName()">Save</button>
        </div>
        <div class="clear" style="border-bottom:#E6E6E6 solid 1px;"></div>
        <div class="clear"></div>
        <div class="profile_photo">
            <img src="public/images/photo.jpg" width="178" height="164" onClick="start_gallery()"> 
        </div>
        <div class="profile_photo_edit">
            <a id="profile_add_photo1"><img src="public/images/add_photobutton.png" width="32" height="32">Add  Photos</a>
            <a id="profile_add_photo" rel="profile_add_photo_box"><img src="public/images/edit_photo.png" width="32" height="32">Edit your photos</a>
            <div id="profile_add_photo_box" class="profile_edit_hide">
                <div id="profile_add_photo_box_title">
                    Photos of you <span>(1)</span>
                </div>
                <div class="add_people_images">
                    <div class="add_people_images_div"><img src="public/images/photo.jpg" width="178" height="164">
                        <div class="chekbox_in_image" align="center"><input type="checkbox" name="edit_photo"></div>
                    </div>
                    <div class="add_people_images_div"><img src="public/images/photo.jpg" width="178" height="164">
                        <div class="chekbox_in_image" align="center"><input type="checkbox" name="edit_photo"></div>
                    </div>
                    <div class="add_people_images_div"><img src="public/images/photo.jpg" width="178" height="164">
                        <div class="chekbox_in_image" align="center"><input type="checkbox" name="edit_photo"></div>
                    </div>
                    <div class="add_people_images_div"><img src="public/images/photo.jpg" width="178" height="164">
                        <div class="chekbox_in_image" align="center"><input type="checkbox" name="edit_photo"></div>
                    </div>

                    <div class="add_people_images_div"><input style="margin:0 0 15px 15px;" id="add_photo_upload_file" type="file" name="add_photo"></div>
                    <div class="clear"></div>


                </div>
                <div class="add_people_images_div_bottom">
                    <button class="favourites_bottom_edit" id="profile_edit_select_checkbox">Select</button>
                    <button class="favourites_bottom_edit" id="profile_delete_select_checkbox">Delete</button>
                </div>
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
            <div class="intrest_friend">Interests <a id="intrest_edit" rel="intrest_edit_view,interest_selected_show"><img src="public/images/edit_intrest.png" width="18" height="17"></a></div>
            <div class="clear"></div>
            <div id="intrest">
                <div id="intrest_edit_view" class="profile_edit_hide">
                    <div style="position:relative"><input type="text" name="intrest" class="intrest_text_search"><button type="button" class="intrest_text_button"></button></div>
                    <div class="clear"></div>
                    <div id="intrest_left">
                        <div id="menutabs">
                            <ul>
                                <li id="intrest_left_li"><a id="HomeTab1" href="javascript:TabingSlide('HomeTab','HomeSubTab', 1, 12);" class="current"><img src="public/images/most_populer.png" width="26" height="26"> Most popular</a></li>
                                <li id="intrest_left_li"><a id="HomeTab2" href="javascript:TabingSlide('HomeTab','HomeSubTab', 2, 12);"><img src="public/images/music.png" width="26" height="26"> Music</a></li>
                                <li id="intrest_left_li"><a id="HomeTab3" href="javascript:TabingSlide('HomeTab','HomeSubTab', 3, 12);"><img src="public/images/tv.png" width="26" height="26"> Movies & TV Shows</a></li>
                                <li id="intrest_left_li"><a id="HomeTab4" href="javascript:TabingSlide('HomeTab','HomeSubTab', 4, 12);"><img src="public/images/fation.png" width="26" height="26"> Fashion & Beauty</a></li>
                                <li id="intrest_left_li"><a id="HomeTab5" href="javascript:TabingSlide('HomeTab','HomeSubTab', 5, 12);"><img src="public/images/sports.png" width="26" height="26"> Sports</a></li>
                                <li id="intrest_left_li"><a id="HomeTab6" href="javascript:TabingSlide('HomeTab','HomeSubTab', 6, 12);"><img src="public/images/travels.png" width="26" height="26"> Travel</a></li>
                                <li id="intrest_left_li"><a id="HomeTab7" href="javascript:TabingSlide('HomeTab','HomeSubTab', 7, 12);"><img src="public/images/prosetion.png" width="26" height="26"> Profession</a></li>
                                <li id="intrest_left_li"><a id="HomeTab8" href="javascript:TabingSlide('HomeTab','HomeSubTab', 8, 12);"><img src="public/images/sports_icon.png" width="26" height="26"> Games</a></li>
                                <li id="intrest_left_li"><a id="HomeTab9" href="javascript:TabingSlide('HomeTab','HomeSubTab', 9, 12);"><img src="public/images/hopiess.png" width="26" height="26"> Hobbies</a></li>
                                <li id="intrest_left_li"><a id="HomeTab10" href="javascript:TabingSlide('HomeTab','HomeSubTab', 10, 12);"><img src="public/images/books.png" width="26" height="26"> Books & Culture</a></li>
                                <li id="intrest_left_li"><a id="HomeTab11" href="javascript:TabingSlide('HomeTab','HomeSubTab', 11, 12);"><img src="public/images/food.png" width="26" height="26"> Food & Drink</a></li>
                                <li id="intrest_left_li"><a id="HomeTab12" href="javascript:TabingSlide('HomeTab','HomeSubTab', 12, 12);"><img src="public/images/others.png" width="26" height="26"> Other</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="intrest_right">
                        <div id="HomeSubTab1" style="display:block">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Technician</a></li>
                                <li id="intrest_right_li"><a href="#">Cuba</a></li>
                                <li id="intrest_right_li"><a href="#">Zombies</a></li>
                                <li id="intrest_right_li"><a href="#">Driver</a></li>
                                <li id="intrest_right_li"><a href="#">PES 2012</a></li>
                                <li id="intrest_right_li"><a href="#">Surfing</a></li>
                                <li id="intrest_right_li"><a href="#">Creative</a></li>
                                <li id="intrest_right_li"><a href="#">Chris Brown</a></li>
                                <li id="intrest_right_li"><a href="#">CSI: Miami</a></li>
                                <li id="intrest_right_li"><a href="#">Lasagne</a></li>
                                <li id="intrest_right_li"><a href="#">Coastal Walks</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab2" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Michael Jackson</a></li>
                                <li id="intrest_right_li"><a href="#">Snoop Dogg</a></li>
                                <li id="intrest_right_li"><a href="#">90s</a></li>
                                <li id="intrest_right_li"><a href="#">Metallica</a></li>
                                <li id="intrest_right_li"><a href="#">The Black Eyed Peas</a></li>
                                <li id="intrest_right_li"><a href="#">Queen</a></li>
                                <li id="intrest_right_li"><a href="#">Coldplay</a></li>
                                <li id="intrest_right_li"><a href="#">50 Cent</a></li>
                                <li id="intrest_right_li"><a href="#">Guitar</a></li>
                                <li id="intrest_right_li"><a href="#">AC/DC</a></li>
                                <li id="intrest_right_li"><a href="#">Nirvana</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab3" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Doctor Who</a></li>
                                <li id="intrest_right_li"><a href="#">Jersey Shore</a></li>
                                <li id="intrest_right_li"><a href="#">Moto GP</a></li>
                                <li id="intrest_right_li"><a href="#">Liar Liar</a></li>
                                <li id="intrest_right_li"><a href="#">The Notebook</a></li>
                                <li id="intrest_right_li"><a href="#">Limitless</a></li>
                                <li id="intrest_right_li"><a href="#">Travel</a></li>
                                <li id="intrest_right_li"><a href="#">Stargate</a></li>
                                <li id="intrest_right_li"><a href="#">History Channel</a></li>
                                <li id="intrest_right_li"><a href="#">The Bone Collector</a></li>
                                <li id="intrest_right_li"><a href="#">Despicable me</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab4" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Angel perfume</a></li>
                                <li id="intrest_right_li"><a href="#">Lucky Jeans</a></li>
                                <li id="intrest_right_li"><a href="#">Red lipstick</a></li>
                                <li id="intrest_right_li"><a href="#">Costume design</a></li>
                                <li id="intrest_right_li"><a href="#">Spa</a></li>
                                <li id="intrest_right_li"><a href="#">Berskha</a></li>
                                <li id="intrest_right_li"><a href="#">CK Escape</a></li>
                                <li id="intrest_right_li"><a href="#">Lancome</a></li>
                                <li id="intrest_right_li"><a href="#">Diadora</a></li>
                                <li id="intrest_right_li"><a href="#">Naomi Campbell</a></li>
                                <li id="intrest_right_li"><a href="#">Cindy Crawford</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab5" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Miami Marlins</a></li>
                                <li id="intrest_right_li"><a href="#">Deportivo La Coruña</a></li>
                                <li id="intrest_right_li"><a href="#">Raul Gonzalez Blanco</a></li>
                                <li id="intrest_right_li"><a href="#">Texas Longhorns</a></li>
                                <li id="intrest_right_li"><a href="#">Mets</a></li>
                                <li id="intrest_right_li"><a href="#">Minnesota Vikings</a></li>
                                <li id="intrest_right_li"><a href="#">Javelin</a></li>
                                <li id="intrest_right_li"><a href="#">Racquetball</a></li>
                                <li id="intrest_right_li"><a href="#">Everton</a></li>
                                <li id="intrest_right_li"><a href="#">Ajax Amsterdam</a></li>
                                <li id="intrest_right_li"><a href="#">B-Boy</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab6" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">San Francisco, California</a></li>
                                <li id="intrest_right_li"><a href="#">USA and Europe</a></li>
                                <li id="intrest_right_li"><a href="#">Coffee</a></li>
                                <li id="intrest_right_li"><a href="#">Nature walks</a></li>
                                <li id="intrest_right_li"><a href="#">Venice, Italy</a></li>
                                <li id="intrest_right_li"><a href="#">Martial arts</a></li>
                                <li id="intrest_right_li"><a href="#">Vermont</a></li>
                                <li id="intrest_right_li"><a href="#">Adventure Travel</a></li>
                                <li id="intrest_right_li"><a href="#">Magaluf</a></li>
                                <li id="intrest_right_li"><a href="#">Chicago, Illinois</a></li>
                                <li id="intrest_right_li"><a href="#">Chilling</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab7" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Sports coaching</a></li>
                                <li id="intrest_right_li"><a href="#">Computer repair</a></li>
                                <li id="intrest_right_li"><a href="#">Science</a></li>
                                <li id="intrest_right_li"><a href="#">Supervisor</a></li>
                                <li id="intrest_right_li"><a href="#">Producing Music</a></li>
                                <li id="intrest_right_li"><a href="#">Customer Service and Sales</a></li>
                                <li id="intrest_right_li"><a href="#">Legal</a></li>
                                <li id="intrest_right_li"><a href="#">Health care</a></li>
                                <li id="intrest_right_li"><a href="#">Architecture</a></li>
                                <li id="intrest_right_li"><a href="#">Masseuse</a></li>
                                <li id="intrest_right_li"><a href="#">Technical Engineer</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab8" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Arcade Games</a></li>
                                <li id="intrest_right_li"><a href="#">NBA 2K</a></li>
                                <li id="intrest_right_li"><a href="#">PC gaming</a></li>
                                <li id="intrest_right_li"><a href="#">PES 2011</a></li>
                                <li id="intrest_right_li"><a href="#">Card</a></li>
                                <li id="intrest_right_li"><a href="#">Super Mario 64</a></li>
                                <li id="intrest_right_li"><a href="#">Left 4 Dead</a></li>
                                <li id="intrest_right_li"><a href="#">Final Fantasy VII</a></li>
                                <li id="intrest_right_li"><a href="#">Batman: Arkham Asylum</a></li>
                                <li id="intrest_right_li"><a href="#">San Andreas</a></li>
                                <li id="intrest_right_li"><a href="#">Puzzles</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab9" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Mountain Bike Trails</a></li>
                                <li id="intrest_right_li"><a href="#">Go-Karts</a></li>
                                <li id="intrest_right_li"><a href="#">Bass Guitar</a></li>
                                <li id="intrest_right_li"><a href="#">Graphic Design</a></li>
                                <li id="intrest_right_li"><a href="#">Songwriting</a></li>
                                <li id="intrest_right_li"><a href="#">Listening To The Radio</a></li>
                                <li id="intrest_right_li"><a href="#">Theatre</a></li>
                                <li id="intrest_right_li"><a href="#">Portrait Photography</a></li>
                                <li id="intrest_right_li"><a href="#">Fixing things</a></li>
                                <li id="intrest_right_li"><a href="#">Drifting</a></li>
                                <li id="intrest_right_li"><a href="#">Outdoor Trips</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab10" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Social Networking</a></li>
                                <li id="intrest_right_li"><a href="#">Cinema</a></li>
                                <li id="intrest_right_li"><a href="#">Lord of the Rings</a></li>
                                <li id="intrest_right_li"><a href="#">Kama Sutra</a></li>
                                <li id="intrest_right_li"><a href="#">Science & Technology</a></li>
                                <li id="intrest_right_li"><a href="#">Da Vinci Code</a></li>
                                <li id="intrest_right_li"><a href="#">Bible</a></li>
                                <li id="intrest_right_li"><a href="#">Cultures</a></li>
                                <li id="intrest_right_li"><a href="#">Stephen King</a></li>
                                <li id="intrest_right_li"><a href="#">General knowledge</a></li>
                                <li id="intrest_right_li"><a href="#">Art</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab11" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">Bacon Cheeseburgers</a></li>
                                <li id="intrest_right_li"><a href="#">Smirnoff</a></li>
                                <li id="intrest_right_li"><a href="#">Pringles</a></li>
                                <li id="intrest_right_li"><a href="#">Croissants</a></li>
                                <li id="intrest_right_li"><a href="#">Sprite</a></li>
                                <li id="intrest_right_li"><a href="#">Captain Morgan</a></li>
                                <li id="intrest_right_li"><a href="#">Oreo</a></li>
                                <li id="intrest_right_li"><a href="#">Curry</a></li>
                                <li id="intrest_right_li"><a href="#">Absolut Vodka</a></li>
                                <li id="intrest_right_li"><a href="#">Greek food</a></li>
                                <li id="intrest_right_li"><a href="#">Bacardi</a></li>
                            </ul>
                        </div>
                        <div id="HomeSubTab12" style="display:none">
                            <ul>
                                <li id="intrest_right_li"><a href="#">מתיקות</a></li>
                                <li id="intrest_right_li"><a href="#">Muslim</a></li>
                                <li id="intrest_right_li"><a href="#">Infiniti</a></li>
                                <li id="intrest_right_li"><a href="#">Diving</a></li>
                                <li id="intrest_right_li"><a href="#">Life</a></li>
                                <li id="intrest_right_li"><a href="#">Vintage cars</a></li>
                                <li id="intrest_right_li"><a href="#">History</a></li>
                                <li id="intrest_right_li"><a href="#">עשה זאת בעצמ</a></li>
                                <li id="intrest_right_li"><a href="#">Arabic</a></li>
                                <li id="intrest_right_li"><a href="#">Serenity</a></li>
                                <li id="intrest_right_li"><a href="#">Sexo tantrico</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <span id="interest_selected_show" class="profile_edit_hide"><img style="vertical-align:middle;" src="public/images/music.png" width="26" height="26"> A.R. Rahman</span>
            </div>
        </div>
        <div class="clear"></div>
        <ul>
            <li class="friend_detail_li">
                <h1 id="friend_title">About me <a id="about_me_edit" rel="about_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" style="width:300px;" class="renderAboutMe_val">
                    Write a few words about yourself - your personality, temperament, attitude towards life and people. What makes you stand out from the crowd? What do other people love about you? And what drives them crazy?
                </h6>
                <div id="about_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <textarea placeholder="About me" class="about_textare" ng-model="userAboutMe" id="renderAboutMe"></textarea>
                    <div class="clear" style="height:10px;"></div>
                    <div style="float:right;">
                        <a class="about_me_save_button" type="button" rel="about_me_edit_view" ng-click="updateAboutMe()">Save</a>
                        <a class="about_me_cancel_button" type="Cancel" rel="about_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Relationship <a id="relationship_me_edit" rel="relationship_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderRelationship_val">
                    No answer
                </h6>
                <div id="relationship_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="relation" ng-model="userRelationship" id="renderRelationship0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="relation" ng-model="userRelationship" id="renderRelationship1" value="1"> Single</label><br/>
                    <label><input type="radio" name="relation" ng-model="userRelationship" id="renderRelationship2" value="2"> Taken</label><br/>
                    <label><input type="radio" name="relation" ng-model="userRelationship"  id="renderRelationship3" value="3"> Open</label>
                    <div class="clear" style="height:15px;"></div>
                    <div><a class="about_me_save_button" type="button" rel="relationship_me_edit_view" ng-click="updateRelationship()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="relationship_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Sexuality <a id="sexuality_me_edit" rel="sexuality_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderSexuality_val">
                    No answer
                </h6>
                <div id="sexuality_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="sexuality" ng-model="userSexuality" id="renderSexuality0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="sexuality" ng-model="userSexuality" id="renderSexuality1" value="1"> Straight</label><br/>
                    <label><input type="radio" name="sexuality" ng-model="userSexuality" id="renderSexuality2" value="2"> Open-minded</label><br/>
                    <label><input type="radio" name="sexuality" ng-model="userSexuality" id="renderSexuality3" value="3"> Bisexual</label><br/>
                    <label><input type="radio" name="sexuality" ng-model="userSexuality" id="renderSexuality4" value="4"> Gay</label>
                    <div class="clear" style="height:15px;"></div>
                    <div><a class="about_me_save_button" type="button" rel="sexuality_me_edit_view" ng-click="updateSexuality()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="sexuality_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Height <a id="height_me_edit" rel="height_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderHeight_val">
                    No answer
                </h6>
                <div id="height_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userHeight" id="renderHeight">
                        <option value="1">Select Height</option>
                        <option value="123">123 cm</option>
                        <option value="124">124 cm</option>
                        <option value="125">125 cm</option>
                        <option value="127">127 cm</option>
                        <option value="128">128 cm</option>
                        <option value="130">130 cm</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0">
                        <a class="about_me_save_button" type="button" rel="height_me_edit_view" ng-click="updateHeight()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="height_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Weight <a id="weight_me_edit" rel="weight_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderWeight_val">
                    No answer
                </h6>
                <div id="weight_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userWeight" id="renderWeight">
                        <option value="1">Select weight</option>
                        <option value="24">24 kg</option>
                        <option value="26">26 kg</option>
                        <option value="30">30 kg</option>
                        <option value="32">32 kg</option>
                        <option value="35">35 kg</option>
                        <option value="40">40 kg</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0"><a class="about_me_save_button" type="button" rel="weight_me_edit_view" ng-click="updateWeight()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="weight_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Body Type <a id="body_type_me_edit" rel="body_type_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderBody_val">
                    No answer
                </h6>
                <div id="body_type_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userBody" id="renderBody">
                        <option value="0">Select body type</option>
                        <option value="1">Slim</option>
                        <option value="2">Normal</option>
                        <option value="3">Fat</option>
                        <option value="4">Very Fat</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0">
                        <a class="about_me_save_button" ng-click="updateBody()" type="button" rel="body_type_me_edit_view">Save</a><a class="about_me_cancel_button" type="Cancel" rel="body_type_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Children <a id="children_me_edit" rel="children_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderChildren_val">
                    No answer
                </h6>
                <div id="children_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="Children" ng-model="userChildren" id="renderChildren0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="Children" ng-model="userChildren" id="renderChildren1" value="1"> No, never</label><br/>
                    <label><input type="radio" name="Children" ng-model="userChildren" id="renderChildren2" value="2"> Somday</label><br/>
                    <label><input type="radio" name="Children" ng-model="userChildren" id="renderChildren3" value="3"> Already have</label><br/>
                    <label><input type="radio" name="Children" ng-model="userChildren" id="renderChildren4" value="4"> Empty nest</label>
                    <div class="clear" style="height:15px;"></div>
                    <div><a class="about_me_save_button" type="button" rel="children_me_edit_view" ng-click="updateChildren()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="children_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Smoking <a id="smoking_me_edit" rel="smoking_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderSmoking_val">
                    No answer
                </h6>
                <div id="smoking_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userSmoking" id="renderSmoking">
                        <option value="0">Select Smoking</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0"><a class="about_me_save_button" type="button" rel="smoking_me_edit_view" ng-click="updateSmoking()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="smoking_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Drinking <a id="drinking_me_edit" rel="drinking_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderDrinking_val">
                    No answer
                </h6>
                <div id="drinking_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="Children" ng-model="userDrinking" id="renderDrinking0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="Children" ng-model="userDrinking" id="renderDrinking1" value="1"> No</label><br/>
                    <label><input type="radio" name="Children" ng-model="userDrinking" id="renderDrinking2" value="2"> No, never</label><br/>
                    <label><input type="radio" name="Children" ng-model="userDrinking" id="renderDrinking3" value="3"> With Company</label><br/>
                    <label><input type="radio" name="Children" ng-model="userDrinking" id="renderDrinking4" value="4"> yes, please!</label>
                    <div class="clear" style="height:15px;"></div>
                    <div ><a class="about_me_save_button" type="button" rel="drinking_me_edit_view" ng-click="updateDrinking()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="drinking_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Education <a id="education_me_edit" rel="education_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderEducation_val">
                    No answer
                </h6>
                <div id="education_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="Children" ng-model="userEducation" id="renderEducation0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="Children" ng-model="userEducation" id="renderEducation1" value="1"> School only</label><br/>
                    <label><input type="radio" name="Children" ng-model="userEducation" id="renderEducation2" value="2"> Trade / Technical</label><br/>
                    <label><input type="radio" name="Children" ng-model="userEducation" id="renderEducation3" value="3"> College / University</label><br/>
                    <label><input type="radio" name="Children" ng-model="userEducation" id="renderEducation4" value="4"> Advanced Degree</label>
                    <div class="clear" style="height:15px;"></div>
                    <div ><a class="about_me_save_button" type="button" rel="education_me_edit_view" ng-click="updateEducation()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="education_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">I Speak <a id="ispeak_me_edit" rel="ispeak_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content">
                    No answer
                </h6>
                <div id="ispeak_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="checkbox" name="Children" > English</label><br/>
                    <label><input type="checkbox" name="Children"> Hindi</label><br/>
                    <label><input type="checkbox" name="Children"> German</label><br/>
                    <label><input type="checkbox" name="Children"> French</label><br/><br/>
                    <select class="height_selected">
                        <option>Select language</option>
                        <option>tamil</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0"><a class="about_me_save_button" type="button" rel="ispeak_me_edit_view">Save</a><a class="about_me_cancel_button" type="Cancel" rel="ispeak_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Job <a id="job_me_edit" rel="job_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderJob_val">
                    No answer
                </h6>
                <div id="job_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>

                    <input type="text" class="height_selected" placeholder="Select job" ng-model="userJob" id="renderJob">
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;">
                        
                        <a class="about_me_save_button" type="button" rel="job_me_edit_view" ng-click="updateJob()">Save</a>
                        
                        <a class="about_me_cancel_button" type="Cancel" rel="job_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Company <a id="company_me_edit" rel="company_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderCompany_val">
                    No answer
                </h6>
                <div id="company_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>

                    <input type="text" class="height_selected" placeholder="Select Company" ng-model="userCompany" id="renderCompany">
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;"><a class="about_me_save_button" type="button" rel="company_me_edit_view" ng-click="updateCompany()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="company_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Income <a id="income_me_edit" rel="income_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="Incomerender_val">
                    No answer
                </h6>
                <div id="income_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <label><input type="radio" name="Children" ng-model="userIncome" id="Incomerender0" value="0"> No answer</label><br/>
                    <label><input type="radio" name="Children" ng-model="userIncome" id="Incomerender1" value="1"> Low</label><br/>
                    <label><input type="radio" name="Children" ng-model="userIncome" id="Incomerender2" value="2"> Average</label><br/>
                    <label><input type="radio" name="Children" ng-model="userIncome" id="Incomerender3" value="3"> High</label><br/>
                    <div class="clear" style="height:15px;"></div>
                    <div ><a class="about_me_save_button" type="button" rel="income_me_edit_view" ng-click="updateIncome()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="income_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Eye Colour <a id="eyecolour_me_edit" rel="eyecolour_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderEyeColor_val">
                    No answer
                </h6>
                <div id="eyecolour_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userEyecolor" id="renderEyeColor">
                        <option value="0">Select Eye Colour</option>
                        <option value="1">black</option>
                        <option value="2">blue</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0"><a class="about_me_save_button" type="button" rel="eyecolour_me_edit_view" ng-click="updateEyecolor()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="eyecolour_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Hair Colour <a id="haircolour_me_edit" rel="haircolour_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="renderHairColor_val">
                    No answer
                </h6>
                <div id="haircolour_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <select class="height_selected" ng-model="userHaircolor" id="renderHairColor">
                        <option>Select Hair Colour</option>
                        <option value="1">black</option>
                        <option value="2">blue</option>
                    </select>
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;margin:0 15px 0 0"><a class="about_me_save_button" type="button" rel="haircolour_me_edit_view" ng-click="updateHaircolor()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="haircolour_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
            </li>
            <li style="border-bottom:#E8E8E8 dotted 1px;"></li>
            <li><div class="clear"></div></li>
            <li class="friend_detail_li">
                <h1 id="friend_title">Living <a id="living_me_edit" rel="living_me_edit_view">Edit <img src="public/images/edit.png" width="18" height="17"></a></h1>
                <h6 id="friend_content" class="userLiving_val">
                    No answer
                </h6>
                <div id="living_me_edit_view" class="profile_edit_hide" style="width:314px;">
                    <div class="clear"></div>
                    <input name="living" class="height_selected" placeholder="Select Living" ng-model="userLiving" id="renderLiving">
                    <div class="clear" style="height:15px;"></div>
                    <div style="float:right;"><a class="about_me_save_button" type="button" rel="living_me_edit_view" ng-click="updateLiving()">Save</a><a class="about_me_cancel_button" type="Cancel" rel="living_me_edit_view">Cancel</a></div>
                    <div class="clear" style="height:2px;"></div>
                </div>
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