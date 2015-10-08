
<footer class="footer1">
  <div class="wrapper_inner">
      <div class="clear"></div>
      <div class="footer_menu_bg1">
          <ul>
              <div class="footer_title">Android and iOS Download</div>
                <li style="clear:both;height:10px"></li>
              <li class="apple"><a  href="#"><div class="apple_div1"><img src="public/images/appele.png" width="29" height="34"></div><div class="apple_div2">Download now<br/><em>via App Store</em></div></a></li>
                <li style="clear:both;height:8px"></li>
                <li class="antroi"><a  href="#"><div class="apple_div1"><img src="public/images/antro.png" width="29" height="34"></div><div class="apple_div2">Download now<br><em>via Google Play</em></div></a></li>
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
              <div class="apple_div1"><img style="margin:4px 0 0 0;" src="public/images/fas.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Facebook</em></div></a>
                    </div>
                    <div style="float:left;margin:0 0 0 15px;">
                    <a class="fase"  href="https://twitter.com/" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="public/images/t.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Twitter</em></div></a>
                    </div>
                    <div class="clear"></div>
                    <div style="float:left;">
                    <a class="fase"  href="https://www.youtube.com/" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="public/images/you.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Youtube</em></div></a>
                    </div>
                    <div style="float:left;margin:0 0 0 15px;">
                    <a class="fase"  href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0" target="_blank"><div class="apple_div1"><img style="margin:4px 0 0 0;" src="public/images/g.jpg" width="31" height="31"></div><div class="apple_div2">Follow us on<br><em>Google+</em></div></a>
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
    window.location.href='welcome_page.php';
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
<script>
  alert('aa');

</script>
<script src="public/app/quickblox/quickblox.js"></script>
<script src="public/app/quickblox/config.js"></script>
<script src="public/app/quickblox/main.js"></script>

  

</html>
