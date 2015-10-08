    <?php
  include ('calls/getCoins.php');
  ?>
<article class="right_content_left_menu2">
        <div class="right_content_inner">
            <div class="clear"></div>
                <h1 class="favourites_title">Coins</h1>
                <h6 class="subscription_title">Top up now - the more coins you buy, the cheaper they are :</h6>
                <div class="clear"></div>
                <div id="mainDivCoin" style="display:block">
                <div class="subscription_left">
                    <div class="subscription_title2" align="center">Choose payment method</div>
                    <div class="clear"></div>
                    <div class="credit_radio"><label><input name="payment_card_type"  value = '1'  style="margin:0px 10px 0 0;" name="credit" type="radio">Credit Card </label></label></div>
                    
                    <div class="credit_radio"><label><input name="payment_card_type"  value = '2'  style="margin:0px 10px 0 0;" name="credit" type="radio">Paypal </label></label></div>
                    <div class='payment_card_type' style="display:none;color:red">Choose any Card</div>
                </div>
                <div class="subscription_right">
                    <div class="subscription_title2" align="center">Choose package</div>
                    <div class="clear"></div>
                    <form>
                        <input type="hidden" class="payment_category" name="payment_category" value="2" style="display:none">
                    <label class="package1">
                        <div class="package_left">
                            <h5 class="package_content1">550 coins</h5>
                            <h6 class="package_content2">Get 50 free! - Pay $450.00 MONTH</h6>
                        </div>
                        <div class="package_right"><input type="radio" name="payment_package" value="1" ></div>
                    </label>
                    <div class="clear" style="height:5px"></div>
                    <label class="package2">
                        <div class="package_left">
                            <h5 class="package_content1">100 coins</h5>
                            <h6 class="package_content2">Pay $90.00 MONTH</h6>
                        </div>
                        <div class="package_right"><input type="radio" name="payment_package" value="2" ></div>
                    </label>
                    <div class="clear" style="height:5px"></div>
                    <label class="package3">
                        <div class="package_left">
                            <h5 class="package_content1">1250 coins</h5>
                            <h6 class="package_content2">Pay $90.00 MONTH</h6>
                        </div>
                        <div class="package_right"><input type="radio" name="payment_package" value="3"></div>
                    </label>
                    
                    <div class='payment_package' style="display:none;color:red">Choose any Package</div>
                    <div class="clear" style="height:20px;"></div>
                    <div class="pakage_bottom_right" style="width:570px">
                    <label class="pakage_bottom_a">
                        <input style="vertical-align:middle;" type="checkbox" name="acceptTerms">
                        Top-up my T&uuml;lyTalk coins automatically when the balance falls below 200 coins </label><br><br><br>
                        <div class='acceptTerms' style="display:none;color:red">Terms and Conditions should be checked</div>
                        <a style="float:right" class="pakage_bottom_button" id="getCoins">Continue</a>
                    </div>
                    </form>
                </div>
                
            <div class="clear"></div>
        </div>
                </div>
  </article>
  
  </div>
<div class="clear" style="height:30px"></div>
</body>
<script type="text/javascript" src="public/js/footer_js.js"></script> 
</html>