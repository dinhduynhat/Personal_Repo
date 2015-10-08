  <div class="clear" style="height:10px"></div>
    <div class="wrapper_inner"><a class="go_back" href="#/login">< Go back</a></div>
  
    <div class="clear" style="height:50px"></div>
    <div class="sing_up_bg">
      <form id="forgetForm" name="forgetForm" class="form-horizontal" role="form">
              <table border="0" width="90%" cellspacing="0" class="sign_up_table">
                  <tr>
                    <td colspan="3" class="title2">Forgot your password?</td>
                  </tr>
                  <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                   <tr>
                    <td colspan="3" class="please_enter">Enter your email address below and we'll send you instructions to create a new password. Make sure you enter the same email address you used to create your profile.</td>
                  </tr>
                   <tr>
                    <td colspan="3" height="15"></td>
                  </tr>
                  <tr>
                    <td width="99" class="sign_up_content">Email address</td>
                    <td width="7">&nbsp;</td>
                    <td width="302">
					
        <div ng-controller="alertCtrlForget">
          <div ng-if="data.show" ng-bind="data.msg"></div>
		</div>

					<input placeholder="Email" class="text_box1" type="email" name="email" ng-model="forget.email" required="required">
  				<span class="errorMessage" ng-show="forgetForm.email.$error.email && !forgetForm.email.$pristine" class="help-inline">Email is not valid</span> 
  				<span class="errorMessage" ng-show="forgetForm.email.$error.required && !forgetForm.email.$pristine" class="help-inline">Email is required.</span>
				
					</td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>&nbsp;</td>
					
					 
					
                    <td><button style="width:auto" class="sign_up" ng-click="doForget(forget)" data-ng-disabled="forgetForm.$invalid" >Get a Password</button></td>
                  </tr>
                </table>
        </form>
    </div>
    <div class="clear" style="height:50px"></div>