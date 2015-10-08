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
		<br><br><br><br>
            <form name="signupForm" class="form-horizontal" role="form">
            <table border="0" cellspacing="0" class="sign_up_table">
                <tr>
                <td colspan="3" class="title1">Registration Success, Please click the link on your email to Activate your Account.</td>
              
              
              </table>
			  <br><br><br><br>
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

<div id="fb-root"></div>
  <script type="text/javascript">
window.fbAsyncInit = function() {
  FB.init({
    appId: '250769438375439',
    cookie: true,xfbml: true,
    channelUrl: 'http://projects.bizarresoftware.in/tulytalk/web/prototype/',
    oauth: true
    });
  };
(function() {
  var e = document.createElement('script');
  e.async = true;e.src = document.location.protocol +'//connect.facebook.net/en_US/all.js';
  document.getElementById('fb-root').appendChild(e);}());

function CallAfterLogin(){
  FB.login(function(response) {   
    window.location.href='#/dashboard';
  },
  {scope:'publish_actions,email'});
}

//functions
function AjaxResponse()
{
}

//Show loading Image
function LodingAnimate() 
{
}

//Reset User button
function ResetAnimate() 
{
}

</script>