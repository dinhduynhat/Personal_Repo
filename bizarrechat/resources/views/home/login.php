<?php
include 'include/loginhead.php';
?>
<div class="wrapper_inner">
  <div class="clear" style="height:25px"></div>
  <!--<div class="alert_popup popup1">
      <div class="forgot_email">
          An email with instructions for creating a new password has been sent to <span id="forgot_email">vinayagamoorthi@bizarresoftware.in</span>
        </div>
      <div class="popup_close">
        <button style="float:right;">X</button>
        </div>
        <div class="clear" style="height:0px"></div>
    </div>-->
    <div class="clear" style="height:25px"></div>
    <div class="sing_up_bg">
      <form action="welcome_page.php">
              <table border="0" width="100%" cellspacing="0" class="sign_up_table">
                  <tr>
                    <td colspan="3" class="title2">Sign in to T&uuml;ly Talk?</td>
                  </tr>
                  <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                   <tr>
                    <td colspan="3" class="please_enter">Please enter your sign in details. <a href="sign_up.php">Sign up here</a> if you are not registered yet.</td>
                  </tr>
                   <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                  <tr>
                    <td width="134" class="sign_up_content">Email address</td>
                    <td width="8">&nbsp;</td>
                    <td width="402"><input class="text_box1" type="text" name="email"></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Password</td>
                    <td>&nbsp;</td>
                    <td><input class="text_box1" type="password" name="Password"></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content"></td>
                    <td>&nbsp;</td>
                    <td><label class="sign_up_content2"><input type="checkbox" name="Remember me">&nbsp;&nbsp;Remember me</label></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td><button style="width:auto" class="sign_up">Sign me in!</button></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                  <td></td>
                    <td>&nbsp;</td>
                    <td><a class="forgot" href="forgot_password.php">Forgot your password?</a></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="20"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td><a href="#"><img src="public/images/faceb.png" width="247" height="43"></a></td>
                  </tr>
                </table>
        </form>
    </div>
    <div class="clear" style="height:50px"></div>
    
</div>

<?php
include 'include/footer.php';
?>