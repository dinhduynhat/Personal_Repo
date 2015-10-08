<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>T&uuml;ly Talk</title>
<link rel="stylesheet" type="text/css" href="http://localhost/bizarrechat/public/css/Tulytalk.css" />
<link rel="shotcut icon" type="favicon.png" href="http://localhost/bizarrechat/public/images/favicon.png" />
<link rel="icon" type="favicon.png" href="http://localhost/bizarrechat/public/images/favicon.png" />
<script src="http://localhost/bizarrechat/public/js//jquery.min.js"></script>
<script>
	$(window).bind("load", function () {
    $('#work-in-progress').fadeOut(100);
    });
	</script>
</head>

<body>
<div id="work-in-progress">
   <div class="work-spinner"></div>
</div>
<header class="top_banner">
  <div class="wrapper_inner">
      <div class="clear"></div>
      <div class="logo"><a href="index.php"><img src="http://localhost/bizarrechat/public/images/logo.png" width="146" height="61" /></a></div>
        <div class="top_right">
          <div class="already_member" style="margin:5px 0 0 0;">First time on T&uuml;ly Talk</div><div style="margin:0 0 0 15px;" class="already_member_a1" > <a href="sign_up.php"><img style="vertical-align:middle" src="http://localhost/bizarrechat/public/images/sign_in_people.png" width="22" height="22"> Try out T&uuml;ly Talk now!</a></div>
        </div>
        <div class="clear"></div>
    </div>
</header>
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
    	{!! Form::open(array('url'=> 'auth/login')) !!}
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
                    <td width="402"><input class="text_box1" type="text" name="name"></td>
                  </tr>
                  <tr>
                    <td colspan="3" height="10"></td>
                  </tr>
                  <tr>
                    <td class="sign_up_content">Password</td>
                    <td>&nbsp;</td>
                    <td><input class="text_box1" type="password" name="password"></td>
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
                    <td><a href="#"><img src="http://localhost/bizarrechat/public/images/faceb.png" width="247" height="43"></a></td>
                  </tr>
                </table>
				    {!! Form::close() !!}
    </div>
    <div class="clear" style="height:50px"></div>
    
</div>

<footer class="footer1">
	<div class="wrapper_inner">
    	<div class="clear"></div>
    	<div class="footer_menu_bg1">
        	<ul>
            	<div class="footer_title">Android and iOS Download</div>
                <li style="clear:both;height:10px"></li>
            	<li class="apple"><a  href="#"><div class="apple_div1"><img src="http://localhost/bizarrechat/public/images/appele.png" width="29" height="34"></div><div class="apple_div2">Download now<br/><em>via App Store</em></div></a></li>
                <li style="clear:both;height:8px"></li>
                <li class="antroi"><a  href="#"><div class="apple_div1"><img src="http://localhost/bizarrechat/public/images/antro.png" width="29" height="34"></div><div class="apple_div2">Download now<br><em>via Google Play</em></div></a></li>
            </ul>
        </div>
        <div class="footer_menu_bg2">
        	<ul>
            	<div class="footer_title">Our T&uuml;ly Talk</div>
                
                <li class="footer_menu_li"><a href="#">Careers</a></li>
                <li class="footer_menu_li"><a href="#">Contact Us</a></li>
                
            </ul>
        </div>
        <div class="footer_menu_bg3">
        	<ul>
            	<div class="footer_title">About T&uuml;ly Talk</div>
                
                <li class="footer_menu_li"><a href="#">Mobile</a></li>
                <li class="footer_menu_li"><a href="#">Terms</a></li>
                <li class="footer_menu_li"><a href="#">Privacy</a></li>
                <li class="footer_menu_li"><a href="#">Cities</a></li>
            </ul>
        </div>
        <div class="footer_menu_bg4">
        	<ul>
            	<div class="footer_title">Android and iOS Download</div>
                <li style="clear:both;height:10px"></li>
                <li>
                	<div style="float:left;">
                    <a class="fase"  href="https://www.facebook.com/" target="_blank">
            	<div class="apple_div1"><img style="margin:4px 0 0 0;" src="http://localhost/bizarrechat/public/images/fas.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Facebook</em></div></a>
                    </div>
                    <div style="float:left;margin:0 0 0 15px;">
                    <a class="fase"  href="https://twitter.com/" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="http://localhost/bizarrechat/public/images/t.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Twitter</em></div></a>
                    </div>
                    <div class="clear"></div>
                    <div style="float:left;">
                    <a class="fase"  href="https://www.youtube.com/" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="http://localhost/bizarrechat/public/images/you.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Youtube</em></div></a>
                    </div>
                    <div style="float:left;margin:0 0 0 15px;">
                    <a class="fase"  href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="http://localhost/bizarrechat/public/images/g.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Google+</em></div></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
        
    </div>
    <div class="designer">
    	<div class="wrapper_inner designer_content" align="center">
        	<div class="clear"></div>
        	Powered by <a href="http://www.bizarresoftware.in/" target="_blank">BIZARRE Software Solutions</a>
            <div class="clear"></div>
        </div>
    </div>
</footer>
</body>
</html>
