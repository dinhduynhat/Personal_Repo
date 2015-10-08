<?php  
session_start();
if(isset($_SESSION['UserEmail']))
{
$UserMail = $_SESSION['UserEmail'];
$_SESSION['AuthUserEmail'] = $UserMail;
session_unset($_SESSION['UserEmail']);
}
else
{
$UserMail = 'null';
}
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
    	<form id="verifyForm">
            	<table border="0" width="100%" cellspacing="0" class="sign_up_table">
                  <tr>
				  
				  <?php
					
					if($UserMail=='null')
					  {
					  
					  echo ' <br> <br> <br> <br> <div colspan="3" class="title2" style="text-align:center">Illegal Access</div> <br> <br> <br> <br>';
					  goto endcard;
					  }
					  
					
					?>
					
                    <td colspan="3" class="title2">Verify your T&uuml;ly Talk account</td>
					
					
                  </tr>
                  <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                   <tr>
                    <td colspan="3" class="please_enter">Please enter your password to verify your account</td>
                  </tr>
				  
				  <div ng-controller="alertCtrlVerify">
					  <div ng-if="data.show" ng-bind="data.msg"></div>
				</div>
		
		
                   <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                  <tr>
                    <td width="600" colspan="3"><div class='alert_message'></div></td>
                    
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td width="134" class="sign_up_content">Email address</td>
                    <td width="8">&nbsp;</td>
                    <td width="402">
					<input type="hidden"  name='verify.useremail' ng-model="verify.useremail" ng-init="verify.useremail='<?php echo $UserMail?>'" value="<?php echo $UserMail?>">
					
                      <b><?php  echo $UserMail; ?></b>
                      
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Password</td>
                    <td>&nbsp;</td>
                    <td>
					
					<input class="text_box1" type="password" id="password" name="password" ng-model="verify.password">
					
					<span class="errorMessage" ng-show="verifyForm.password.$error.required" class="help-inline">Email is required.</span>
					</td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                 
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td><button style="width:auto" ng-click="doVerify()" data-ng-disabled="verifyForm.$invalid" class="sign_up" id="verifyButton">Verify Account</button></td>
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
                 <?php 
				 
				 endcard:
				 
				 ?>
                </table>
				</form>
    </div>
    <div class="clear" style="height:50px"></div>
    
</div>