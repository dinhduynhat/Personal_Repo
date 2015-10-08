<script src="public/js/jquery.cookie.js"></script>
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
                    <form name="signupForm" class="form-horizontal" role="form">
                        <table border="0" cellspacing="0" class="sign_up_table">



                            <tr>
                                <td colspan="3" class="title1">First time on T&uuml;ly Talk?</td>
                            </tr>
                            <div ng-controller="regCtrl">
                                <div ng-if="data.show" ng-bind="data.msg"></div>
                            </div>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td width="92" class="sign_up_content">First name</td>
                                <td width="14">&nbsp;</td>
                                <td width="252"><input placeholder="First name" class="text_box1" type="text" name="firstname" style="width:236px;" ng-model="signup.firstname"></td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td width="92" class="sign_up_content">Email</td>
                                <td width="14">&nbsp;</td>
                                <td width="252">
                                    <input placeholder="Email" class="text_box1" type="email" name="email" ng-model="signup.email"  style="width:236px;" required="required">
                                    <span class="errorMessage" ng-show="signupForm.email.$error.email && !signupForm.email.$pristine" class="help-inline">Email is not valid</span> 
                                    <span class="errorMessage" ng-show="signupForm.email.$error.required && !signupForm.email.$pristine" class="help-inline">Email is required.</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td width="92" class="sign_up_content">Password</td>
                                <td width="14">&nbsp;</td>
                                <td width="252">
                                    <input placeholder="Password" class="text_box1" type="password" name = "password" placeholder="Password"   ng-minlength="8" ng-model="signup.password"  style="width:236px;">

                                    <small class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$error.minlength"> Minimum 8 characters.</small>
                                    <small class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$error.required"> Enter password again.</small>
                                    <small class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$error.passwordNoMatch && !signupForm.password.$error.required"> Password do not match.</small>


                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td width="92" class="sign_up_content">Confirm Password</td>
                                <td width="14">&nbsp;</td>
                                <td width="252">

                                    <input placeholder="Confirm Password" class="text_box1" type="password"  name="password2" placeholder="Password Again"   ng-minlength="8" ng-model="signup.password2" password-match="signup.password"  style="width:236px;">
                                    <small class="errorMessage" data-ng-show="signupForm.password2.$dirty && signupForm.password2.$error.minlength"> Minimum 8 characters.</small>
                                    <small class="errorMessage" data-ng-show="signupForm.password2.$dirty && signupForm.password2.$error.required"> Enter password again.</small>
                                    <small class="errorMessage" data-ng-show="signupForm.password2.$dirty && signupForm.password2.$error.passwordNoMatch && !signupForm.password2.$error.required"> Password do not match.</small>


                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>&nbsp;</td>
                                <td>

                                    <button class="sign_up" ng-click="doReg()" data-ng-disabled="signupForm.$invalid">
                                        Sign up</button>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="2"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>&nbsp;</td>
                                <td>










                            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                                Login using Facebook
                                <img src="public/images/faceb.png" width="247" height="43">
                            </fb:login-button>

                            <div id="fb-root">
                            </div>

                            <div id="status" style="display:none">
                            </div>
                            </td>


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


<script>

    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);



        $.ajax({
            url: 'resources/views/layout/calls/checkSession.php',
            type: 'POST',
            data: {test: 'test'},
            success: function (message)
            {
                console.log(message);        
                console.log('good');
                if (message == 1)
                {
                    console.log('loggedin');
                    window.location.href = '#/dashboard';
                    //	$location.path('dashboard');
                }
                else {


                    if (response.status === 'connected') {
                        testAPI();
                    } else if (response.status === 'not_authorized') {
                        document.getElementById('status').innerHTML = 'Please log ' +
                                'into this app.';
                    } else {
                        document.getElementById('status').innerHTML = 'Please log ' +
                                'into Facebook.';
                    }


                    console.log('not logged in');
                    //	 $location.path('login');
                }

            }

        });




    }

    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
            console.log('131');
            return false;
        });
    }

    window.fbAsyncInit = function () {
        FB.init({
            appId: '866424873429682',
            cookie: true, // enable cookies to allow the server to access 
            // the session
            xfbml: true, // parse social plugins on this page
            version: 'v2.2' // use version 2.2
        });

        FB.getLoginStatus(function (response) {
            console.log('121');
            //statusChangeCallback(response);
        });

    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function testAPI() {
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function (response) {
            console.log('Successful login for: ' + response.name);

            var fbid = response.id;
            localStorage.setItem('fbid', fbid);
            var fbname = response.first_name;
            var fbmail = response.email;
            var fbgender = response.gender;
            console.log(response);
            console.log(fbid);
            console.log(fbname);
            console.log(fbmail);
            console.log(fbgender);
            console.log('start');


            $.ajax({
                url: 'CheckFBStatus',
                type: 'POST',
                data: {fbid: fbid},
                success: function (message)
                {
                    
                    
                    var par = JSON.parse(message);                   
                    console.log('session set');
                    if (par.success!=0)
                    {
                    $.cookie("bz_id", par.userid);
                    console.log('session set');
                    
                    location.reload();
                    window.location.href = '#/dashboard';
                    }
                    else
                    {


                        var quickbloxapitoken = localStorage.getItem('quickbloxapitoken');
                        //var firstdata = { login: fbname, password: 'fbuserfbuser', email: fbmail};
                        var facebookid = localStorage.getItem('fbid');
                        var facebook_id = "_"+localStorage.getItem('fbid');
                        
                        $.ajax({
                            url: 'http://api.quickblox.com/users.json',
                            type: 'POST',
                            contentType: 'application/json',
                            dataType: 'json',
                            data: JSON.stringify({
                                token: quickbloxapitoken,
                                user: {
                                    login: facebookid,
                                    password: facebook_id,
                                    email: fbmail
                                }
                            }),
                            success: function (message)
                            {
                                var qb_id = message.user.id;
                                
                                
                                $.ajax({
                                    url: 'RegisterUser',
                                    type: 'POST',
                                    data: {quickblox_id: qb_id, facebook_id: fbid, firstname: fbname, email: fbmail},
                                    success: function (message)
                                    {
                                        console.log('redirect');
   
                                        
                                        window.location.href = '#/registersuccess';
                                    }
                                });



                            }
                        });

                    }

                }
            });

            console.log('endcard');
            return false;




            document.getElementById('status').innerHTML =
                    'Thanks for logging in, ' + response.name + '!';
        });
    }
</script>