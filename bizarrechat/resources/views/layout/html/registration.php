<?php  
session_start();
if(isset($_SESSION['VerifiedEmail']))
{
$VerifiedEmail = $_SESSION['VerifiedEmail'];
$_SESSION['VerifiedParsedEmail'] = $VerifiedEmail;
session_unset($_SESSION['VerifiedEmail']);
}
else
{
$VerifiedEmail = 'null';
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
    	<form >
            	<table border="0" cellspacing="0" class="sign_up_table">
                  <tr>
				  
				  <?php
					
					if($VerifiedEmail=='null')
					  {
					  echo ' <br> <br> <br> <br> <div colspan="3" class="title2" style="text-align:center">Illegal Access</div> <br> <br> <br> <br>';
					  #goto endcard;
					  }
					?>
					<input type="hidden"  name='register.useremail' ng-model="register.useremail" ng-init="register.useremail='<?php echo $VerifiedEmail?>'" value="<?php echo $VerifiedEmail?>">
                    <td colspan="3" class="title2">Registration <span style="font-size:14px;">(After successful email confirmation)</span></td>
                  </tr>
                  
                  
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Birthday</td>
                    <td>&nbsp;</td>
                    <td>
                    	<select name="day" class="select_box2" ng-model="register.day">
                        	<option class="select_op" value="">Day</option>
                            <option class="select_op">01</option>
                            <option class="select_op">02</option>
                            <option class="select_op">03</option>
                            <option class="select_op">04</option>
                            <option class="select_op">05</option>
                            <option class="select_op">06</option>
                            <option class="select_op">07</option>
                            <option class="select_op">08</option>
                            <option class="select_op">09</option>
                            <option class="select_op">10</option>
                            <option class="select_op">11</option>
                            <option class="select_op">12</option>
                            <option class="select_op">13</option>
                            <option class="select_op">14</option>
                            <option class="select_op">15</option>
                            <option class="select_op">16</option>
                            <option class="select_op">17</option>
                            <option class="select_op">18</option>
                            <option class="select_op">19</option>
                            <option class="select_op">20</option>
                            <option class="select_op">21</option>
                            <option class="select_op">22</option>
                            <option class="select_op">23</option>
                            <option class="select_op">24</option>
                            <option class="select_op">25</option>
                            <option class="select_op">26</option>
                            <option class="select_op">27</option>
                            <option class="select_op">28</option>
                            <option class="select_op">29</option>
                            <option class="select_op">30</option>
                            <option class="select_op">31</option>
                        </select>
                        <select name="month" class="select_box3" ng-model="register.month">
                        	<option value="">Month</option>
                            <option class="select_op" value="01">January</option>
                            <option class="select_op" value="02">February</option>
                            <option class="select_op" value="03">March</option>
                            <option class="select_op" value="04">April</option>
                            <option class="select_op" value="05">May</option>
                            <option class="select_op" value="06">June</option>
                            <option class="select_op" value="07">July</option>
                            <option class="select_op" value="08">August</option>
                            <option class="select_op" value="09">September</option>
                            <option class="select_op" value="10">October</option>
                            <option class="select_op" value="11">November</option>
                            <option class="select_op" value="12">December</option>
                        </select>
                        <select name="year" class="select_box4" ng-model="register.year">
                        	<option class="select_op" value="">Year</option>
                            <option class="select_op">1996</option>
                            <option class="select_op">1995</option>
                            <option class="select_op">1994</option>
                            <option class="select_op">1993</option>
                            <option class="select_op">1992</option>
                            <option class="select_op">1991</option>
                            <option class="select_op">1990</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Phone no</td>
                    <td>&nbsp;</td>
                    <td><input class="text_box1" type="text" name="Phone no" style="width:25px;" placeholder="+" ng-model="register.code"> 
					
					<input placeholder="Phone no" class="text_box1" type="text" style="width:197px;" name="Phone no" ng-model="register.phone"></td>
                  </tr>
                   <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Your City</td>
                    <td>&nbsp;</td>
                    <td><input class="text_box1" type="text" name="Your City" style="width:236px;" placeholder="City name, Country name" ng-model="register.city"></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Gender</td>
                    <td>&nbsp;</td>
                    <td>
                    <label class="sign_up_content2">
                    	<input type="radio" name="sex" ng-model="register.sex" ng-init="1" value='1'>Male
                    </label>
                    <label class="sign_up_content2">
                    	<input type="radio" name="sex" ng-model="register.sex" ng-init="2" value='2'>Female
                    </label>
                    </td>
                  </tr>
                   <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">I’m here to</td>
                    <td>&nbsp;</td>
                    <td>
                    	<select class="select_box1" name="here to" ng-model="register.interest">
                        	<option value=''>I’m here to</option>
                            <option value='1'>Make New Friends</option>
                            <option value='2'>Chat</option>
                            <option value='3'>Date</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Seeking for</td>
                    <td>&nbsp;</td>
                    <td>
                    	<select class="select_box1" name="here to" ng-model="register.seeking">
                             <option value=''>Seeking for</option>
                             <option value='1'>men</option>
                            <option value='2'>women</option>
                            <option value='3'>both</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
                    <td><button style="width:auto;" class="sign_up" ng-click="doCompleteRegister()" data-ng-disabled="verifyForm.$invalid" >Sign up</button></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
             </table>
				</form>
    </div>
    <div class="clear" style="height:50px"></div>
    
</div>
<div class="clear" style="height:30px"></div>