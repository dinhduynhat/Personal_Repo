<?php
include 'include/head.php';
?>
<style type="text/css">
  .form-horizontal input.ng-invalid.ng-dirty {
    border-color: #FA787E;
  }

  .form-horizontal input.ng-valid.ng-dirty {
    border-color: #78FA89;
  }
</style>



<!--<div class="already_member1 mobile1a">Already a member? <a href="#">Sign&nbsp;in</a></div>-->
<div class="design1">
    <div class="cloud1" style="z-index:5;"><img src="public/images/clouds1.png" width="84" height="52" /></div>
    <div class="cloud2" style="z-index:5;"><img src="public/images/clouds2.png" width="253" height="116" /></div>
    <div class="cloud3" style="z-index:5;"><img src="public/images/clouds3.png" width="87" height="66" /></div>
    <div class="cloud4" style="z-index:5;"><img src="public/images/clouds4.png" width="152" height="26" /></div>
    <div class="wrapper_inner" style="position:relative;">
    <div class="design_up">
        <div class="tree">
        <div class="popup_1"><img src="public/images/men1.png" width="88" height="74"></div>
        <div class="popup_2"><img src="public/images/popup_2.png" width="94" height="82"></div>
        <div class="popup_3"><img src="public/images/popup_3.png" width="181" height="100"></div>
        <div class="popup_4"><img src="public/images/popup_4.png" width="99" height="65"></div>
        <div class="popup_5"><img src="public/images/popup_5.png" width="79" height="86"></div>
        <div class="popup_6"><img src="public/images/popup_6.png" width="114" height="73"></div>
        <div class="popup_7"><img src="public/images/popup_7.png" width="61" height="44"></div>
      </div>
        <div class="sign_up_right">
        <div class="sign_up_right_bg"></div>
        <div class="sign_up_right_contents" >
            <form role="form" name="myForm" >
            <table border="0" cellspacing="0" class="sign_up_table">
                <tr>
                <td colspan="3" class="title1">First time on T&uuml;ly Talk?</td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td width="92" class="sign_up_content">First name</td>
                <td width="14">&nbsp;</td>
                <td width="252">

                


                <input name="name" ng-model="customer.customerName" type= "text"  class="text_box1"  style="width:236px;"  placeholder="Your name" required/>
                <span ng-show="myForm.name.$dirty && myForm.name.$invalid" class="help-inline">Name Required</span>


                </td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td width="92" class="sign_up_content">Email</td>
                <td width="14">&nbsp;</td>
                <td width="252">


                <input name="email" ng-model="customer.email" type= "email" class= "text_box1" placeholder="Enter email" style="width:236px;" required/>
                <span ng-show="myForm.email.$dirty && myForm.email.$invalid && !myForm.email.$error.email" class="help-inline">Email Required</span>
                <span ng-show="myForm.email.$error.email" class="help-inline">Email is not valid</span>





                




                </td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td width="92" class="sign_up_content">Password</td>
                <td width="14">&nbsp;</td>
                <td width="252"><input placeholder="Password" class="text_box1" type="text" style="width:236px;" id="register_password"></td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td width="92" class="sign_up_content">Confirm Password</td>
                <td width="14">&nbsp;</td>
                <td width="252"><input placeholder="Confirm Password" class="text_box1" type="text" id="register_password" style="width:236px;"></td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td></td>
                <td>&nbsp;</td>
                <td>


                <button ng-click="saveCustomer(customer);" 
                ng-disabled="isClean() || myForm.$invalid"
                class="sign_up">{{buttonText}}</button>

                  

                </td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td></td>
                <td>&nbsp;</td>
                <td><a onClick="javascript:CallAfterLogin();return false;"><img src="public/images/faceb.png" width="247" height="43"></a></td>
              </tr>
                <tr>
                <td colspan="3" height="2"></td>
              </tr>
                <tr>
                <td></td>
                <td>&nbsp;</td>
                <td><a href="#"><img src="public/images/app.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/anntr.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/black.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/window.png" width="60" height="55"></a></td>
              </tr>
              </table>

                


          </form>
          </div>
      </div>
      </div>
  </div>
  </div>
<div style="height:550px"></div>
<section class="section1">
    <div class="border"></div>
    <div class="section_design1">
    <div class="wrapper_inner">
        <div class="section1_content">
        <div class="section1_wight_bg"></div>
        <div class="section1_content_inner">
            <h1 class="home_page_title">View Matches</h1>
            <p class="home_page_p">Find new people. It’s a great way to break the ice and start chatting!</p>
            <br>
            <a class="find_people_a" href="sign_in.php">Find People</a> </div>
      </div>
      </div>
  </div>
  </section>
<section class="section2">
    <div class="border"></div>
    <div class="wrapper_inner" style="position:relative;">
    <div class='pin1 bounce1'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse1'></div>
    <div class='pin2 bounce2'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse2'></div>
    <div class='pin3 bounce3'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse3'></div>
    <div class='pin4 bounce4'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse4'></div>
    <div class='pin5 bounce5'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse5'></div>
    <div class='pin6 bounce6'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse6'></div>
    <div class='pin7 bounce7'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse7'></div>
    <div class='pin8 bounce8'><img src="public/images/intication.png" width="39" height="41"></div>
    <div class='pulse8'></div>
    <div class="clear" style="height:50px"></div>
    <div class="section_2_content">
        <h1 class="home_page_title2">Chat from anywhere</h1>
        <p class="home_page_p2">T&uuml;ly Talk works on your computer and your mobile. Keep in touch wherever you go, whenever you want.</p>
        <a href="#"><img src="public/images/app.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/anntr.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/black.png" width="60" height="55"></a>&nbsp;<a href="#"><img src="public/images/window.png" width="60" height="55"></a> </div>
  </div>
  </section>




<?php
include 'include/footer.php';
?>