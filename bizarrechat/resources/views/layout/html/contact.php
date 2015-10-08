    <article class="right_content_left_menu2">
    	<div class="right_content_inner">
        	<div class="clear" ></div>
          		
                <div >
                
                <table border="0" cellspacing="0" class="sign_up_table">
                  <tr>
                    <td colspan="3" class="title2">Contact Us</td>
                  </tr>
                  <div ng-controller="contactCtrl">
                                <div ng-if="data.show" ng-bind="data.msg"></div>
                    </div>
                  
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  
                  <tr>
                    <td class="sign_up_content">Select</td>
                    <td>&nbsp;</td>
                    <td>
                        <select class="select_box1" name="here to" ng-model="contactUsType">
                             <option>Select</option>
                             <option value="1">Complaint</option>
                             <option value="2">Info</option>
                             <option value="3">Contact us</option>
                             <option value="4">Others</option>
                        </select>
                    </td>
                  </tr>
                  
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  
                  <tr>
                    <td class="sign_up_content">Comments</td>
                    <td>&nbsp;</td>
                    <td>
                        <textarea name="textarea-1" id="textarea-1" class="text_box1" placeholder="Type your Comments" style="width:239px;" ng-model="contactUsComments"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" height="5"></td>
                  </tr>
                  
                  <tr>
                    <td class="sign_up_content"></td>
                    <td>&nbsp;</td>
                    <td>
                        <button style="width:auto;" class="sign_up" ng-click="updateContactUs()">Send</button>
                    </td>
                  </tr>
                  
            </table>
                
                
                
                </div>		
                
       	  <div class="clear" ></div>
        </div>
  </article>
  </div>
<div class="clear" style="height:30px"></div>
</body>
<script type="text/javascript" src="public/js/footer_js.js"></script> 
</html>