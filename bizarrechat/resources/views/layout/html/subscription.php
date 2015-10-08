    <?php
  include ('calls/doSubscribe.php');
  ?>
<article class="right_content_left_menu2">
    <form name="subscriptionForm" class="form-horizontal" role="form">
        <div class="right_content_inner">
            <div class="clear"></div>
            <h1 class="favourites_title">Subscription</h1>            
            <div class="clear"></div>
            <div id="mainDiv" style="display:block">
            <div class="subscription_left">
                <div class="subscription_title2" align="center">Choose payment method</div>
                <div class="clear"></div>
                <input type="hidden" class="payment_category" name="payment_category" value="1" style="display:none">
                <div class="credit_radio"><label><input name="payment_card_type" style="margin:0px 10px 0 0;" value="1" type="radio" >Credit Card </label></label></div>
                <div class="credit_radio"><label><input name="payment_card_type"  value = '2'  style="margin:0px 10px 0 0;" type="radio" >Paypal </label></label></div>
                <div class='payment_card_type' style="display:none;color:red">Choose any Card</div>
                
            </div>
            <div class="subscription_right">
                <div class="subscription_title2" align="center">Choose package</div>
                <div class="clear"></div>
                <form>
                    <label class="package1">
                        <div class="package_left">
                            <h5 class="package_content1">1 month at $500.00 month</h5>
                            <h6 class="package_content2">$500.00  in total</h6>
                        </div>
                        <div class="package_right"><input type="radio" value="1" name="payment_package"   ></div>
                    </label>
                    <div class="clear" style="height:5px"></div>
                    <label class="package2">
                        <div class="package_left">
                            <h5 class="package_content1">6 months at $300.00 month</h5>
                            <h6 class="package_content2">Save 40% - $1,800.00  in total</h6>
                        </div>
                        <div class="package_right"><input type="radio" value="2" name="payment_package"  ></div>
                    </label>
                    <div class="clear" style="height:5px"></div>
                    <label class="package3">
                        <div class="package_left">
                            <h5 class="package_content1">12 months at $233.33 month</h5>
                            <h6 class="package_content2">Save 53% - $2,800.00  in total</h6>
                        </div>
                        <div class="package_right"><input type="radio" value="3" name="payment_package" ></div>
                    </label>
                <div class='payment_package' style="display:none;color:red">Choose any Package</div>

                    <div class="clear" style="height:20px;"></div>
                    <div class="pakage_bottom_right">
                        <label class="pakage_bottom_a">
                            <input style="vertical-align:middle;" type="checkbox"  name="acceptTerms" >  Terms and Conditions</label>
                        <div class='acceptTerms' style="display:none;color:red">Terms and Conditions should be checked</div>
                        <button class="pakage_bottom_button" id="doSubscribe" >Continue</button>
                        
                        
                        
                        
                    </div>
                
            </div>

            <div class="clear"></div>
        </div>
            </div>
    </form>
</article>
</div>
<div class="clear" style="height:30px"></div>

</body>
<script type="text/javascript" src="js/footer_js.js"></script> 
</html>

