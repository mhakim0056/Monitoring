
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Login</title>
        <script type="text/javascript">
            var FROM_APP = "0";
            var SPY_DEVICES_NUM = 0;
            var LAMG_NO_MORE = "no more";
            var LAMG_COME_BACK = "Come back";
            var LAMG_NO_DEVICES_YET = "No devices yet.";
            var LAMG_SET_NEW_DEVICE = "Set new device";
            var LAMG_SIGN_OUT = "Sign out";
            var LAMG_RETURN_DASHBOARD = "Return dashboard";
            var LAMG_UNBINDING_FAILD = "Sorry! Unbinding faild.";
            var STATIC_URL = "https://statics.spyzie.com";
            var SPY_SYNC = "sync...";
            var SPY_SYNCHING = "Synching...";
            var SPY_ONLINE = "Online";
            var SPY_OFFLINE = "Offline";
            var SPY_ACTIVE = "Active";
            var SPY_LOCKED = "Locked";
            var SPY_ENABLED = "Enabled";
            var SPY_DISABLED = "Disabled";

            var FB_CANNOT_BE_LOADED = "The requested content cannot be loaded. <br /> Please try again later.";
            var FB_SLIDESHOW = "Slide show";
            var FB_FULL_SCREEN = "Full screen";
            var FB_THUMBNAILS = "Thumbnails";
            var FB_PREVIOUS = " Previous";
            var FB_NEXT = "Next ";
            var FB_CLOSE = "Close";
            var FB_WHY_OFFLINE = "The target device is offline. It means the device is probably powered off, disconnected with internet or standby mode with screen lock.";

                        var availableLocales = '["en-US","es","pt","fr","de","it","nl","ar"]';
            var currentLanguage = 'en-US';
            var urlLanguage = getQueryString('lang');
            var browserLanguage = navigator.browserLanguage ? navigator.browserLanguage : navigator.language;
            browserLanguage = browserLanguage.substr(0, 2);
            var oldBrowserLanguage = getCookie('browser_local');

            if (oldBrowserLanguage !== browserLanguage) {
                document.cookie = 'browser_local=' + browserLanguage;
                browserLanguage = availableLocales.indexOf(browserLanguage) > 0 ? browserLanguage : 'en-US';
                if (browserLanguage !== currentLanguage.substr(0, 2)) {
                    var url = window.location.href;
                    window.location.href = getLangUrl(url, 'lang', browserLanguage);
                }
            }

            function getQueryString(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r !== null) {
                    return unescape(r[2]);
                }
                return '';
            }

            function getLangUrl(url,arg,arg_val){
                var pattern=arg+'=([^&]*)';
                var replaceText=arg+'='+arg_val;
                if(url.match(pattern)){
                    var tmp='/('+ arg+'=)([^&]*)/gi';
                    tmp=url.replace(eval(tmp),replaceText);
                    return tmp;
                }else{
                    if(url.match('[\?]')){
                        return url+'&'+ replaceText;
                    }else{
                        return url+'?'+replaceText;
                    }
                }
            }

            function getCookie(name)
            {
                var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
                if(arr=document.cookie.match(reg))
                    return unescape(arr[2]);
                else
                    return '';
            }
                    </script>
        <link href="https://statics.spyzie.com/css/main.min.css?v=1516603721" rel="stylesheet">
<link href="https://statics.spyzie.com/css/login.css?v=1516603721" rel="stylesheet">
<script src="https://statics.spyzie.com/js/lib/jquery-2.1.4.bootstrap.min.js?v=1516603721"></script>
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="vzfdM0puJwkAn54T2qeWlzWTEpo5F6AvK47hPIbZ54vXZoxeAChxYm-n7FGu4qHteswjy1xcx3Bt96Jyw4-d4Q==">
    </head>
    <body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
            <!--mobile top-->
<div class="mobile_header">
<a href="javascript:void(0)" class="menu_btn"><i class="si si-table"></i></a>
<div class="other_btn">
  <a href="https://my.spyzie.com/signup.html?lang=en" class="btn btn-border btn-xs mobile_user_login">Sign Up</a>
</div>
<div class="logo_box">
  <a href="https://www.spyzie.com/index.html" class="logo logo_spyzie">Spyzie</a>
</div>
</div>
<div class="mobile_menuBox clickMenu_show_nav">
  <div class="top">
    <a href="javascript:;" class="menu_btn_close btn_close"><i class="si si-close"></i></a>
    <div class="language dropdown">
      <a href="#" class="flag flag-en dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"><span>English</span></a>
      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
        <li><a href="https://www.spyzie.com/de/" class="flag flag-de"><span>Deutsch</span></a></li>
        <li><a href="https://www.spyzie.com/fr/" class="flag flag-fr"><span>Français</span></a></li>
        <li><a href="https://www.spyzie.com/it/" class="flag flag-it"><span>Italiano</span></a></li>
        <li><a href="https://www.spyzie.com/ar/" class="flag flag-ar"><span>عربى</span></a></li>
        <li><a href="https://www.spyzie.com/es/" class="flag flag-es"><span>Español</span></a></li>
        <li><a href="https://www.spyzie.com/br/" class="flag flag-br"><span>Português</span></a></li>
        <li><a href="https://www.spyzie.com/nl/" class="flag flag-nl"><span>Nederlands</span></a></li>
      </ul>
    </div>
  </div>
  <div class="cont">
    <ul class="nav">
      <li><a href="https://www.spyzie.com/spy-calls.html">Features</a></li>
      <li><a href="https://www.spyzie.com/how-to-spy-android-phones.html">Tutorials</a></li>
      <li><a href="https://my.spyzie.com/livedemo.html">Demo</a></li>
      <li><a href="https://www.spyzie.com/faq.html">Support</a></li>
      <li><a href="https://www.spyzie.com/pricing-plans.html">Pricing</a></li>
    </ul>
    <div class="search_box">
      <form action="https://www.spyzie.com/search.html" id="topmenu_search_from" target="_parent">
        <div class="search_t">
          <input name="cx" value="014421072562994270361:lbeztowvc9w" type="hidden">
          <input name="cof" value="FORID:10" type="hidden">
          <input name="ie" value="UTF-8" type="hidden">
          <input value="" name="q" id="topmenu_search_keyword" class="text ac_input"  placeholder="Search spyzie.com" size="10" autocomplete="off" type="text">
        </div>
        <label for="topmenu_search_submit"> <i class="searchBtn_icon si si-search"></i>
          <input name="sa" class="rel_pro_btn searchBtn" id="topmenu_search_submit" value="Search" type="submit">
        </label>
      </form>
    </div>
    <div class="other">
      <div class="btnBox"><a href="https://my.spyzie.com/login.html?lang=en" class="btn btn-full btn-md">Sign In</a></div>
      <div class="other_btn">
        <ul>
        <li><a href="https://my.spyzie.com/livedemo.html"><i><img src="https://images.spyzie.com/images/icon_livedemo_s.png" alt=""></i><span>Live Demo</span></a></li>
        <li><a href="https://www.spyzie.com/about-us.html"><i><img src="https://images.spyzie.com/images/icon_about_s.png" alt=""></i><span>About</span></a></li>
        <li><a href="https://www.spyzie.com/contact-us.html"><i><img src="https://images.spyzie.com/images/icon_support_s.png" alt=""></i><span>Contact Us</span></a></li>
        <li><a href="https://www.spyzie.com/legal-info.html"><i><img src="https://images.spyzie.com/images/icon_eula_s.png" alt=""></i><span>EULA</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--end mobile top-->

<div class="pageTop">
  <div class="container">
    <div class="saerch_btn"> <a href="javascript:void(0)" class="icon searchBtn_click"><i class="si si-search"></i><i class="si si-close close"></i></a>
      <div class="search_box" style="display:none;">
        <form action="https://www.spyzie.com/search.html" id="top_search_from" target="_parent">
          <div class="search_t">
            <input name="cx" value="014421072562994270361:lbeztowvc9w" type="hidden">
            <input name="cof" value="FORID:10" type="hidden">
            <input name="ie" value="UTF-8" type="hidden">
            <input value="" name="q" id="top_search_keyword" class="text ac_input"  placeholder="Search ... " size="10" autocomplete="off" type="text">
          </div>
          <label for="top_search_submit"> <i class="searchBtn_icon si si-search"></i>
            <input name="sa" class="rel_pro_btn searchBtn" id="top_search_submit" value="Search" type="submit">
          </label>
        </form>
      </div>
    </div>
    <div class="user_login"> <a href="https://my.spyzie.com/login.html?lang=en">Login</a> <a href="https://my.spyzie.com/signup.html?lang=en">Sign up</a> </div>
    <div class="language dropdown"> <a href="https://www.spyzie.com/" class="flag flag-en dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"><span>English</span></a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="https://www.spyzie.com/de/" class="flag flag-de"><span>Deutsch</span></a></li>
        <li><a href="https://www.spyzie.com/fr/" class="flag flag-fr"><span>Français</span></a></li>
        <li><a href="https://www.spyzie.com/it/" class="flag flag-it"><span>Italiano</span></a></li>
        <li><a href="https://www.spyzie.com/ar/" class="flag flag-ar"><span>عربى</span></a></li>
        <li><a href="https://www.spyzie.com/es/" class="flag flag-es"><span>Español</span></a></li>
        <li><a href="https://www.spyzie.com/br/" class="flag flag-br"><span>Português</span></a></li>
        <li><a href="https://www.spyzie.com/nl/" class="flag flag-nl"><span>Nederlands</span></a></li>
      </ul>
    </div>
  </div>
</div>
<div class="header">
  <div class="container">
    <div class="logo_box"> <a href="https://www.spyzie.com/index.html" class="logo logo_spyzie">Spyzie</a> </div>
    <a href="javascript:void(0)" class="menu_btn inline-block icon-burger"><span class="lines"></span></a>
    <div class="navbar clickMenu_show_nav"> <a href="javascript:void(0)" class="menu_btn_close icon-burger curr"><span class="lines"></span></a>
      <ul class="nav">
        <li><a href="https://www.spyzie.com/spy-calls.html">Features</a></li>
        <li><a href="https://www.spyzie.com/how-to-spy-android-phones.html">Tutorials</a></li>
        <li><a href="https://my.spyzie.com/livedemo.html">Demo</a></li>
        <li><a href="https://www.spyzie.com/faq.html">Support</a></li>
        <li><a href="https://www.spyzie.com/pricing-plans.html">Pricing</a></li>
      </ul>
      <div class="other"> <a href="https://my.spyzie.com/signup.html?lang=en" class="btn-border">Try it now</a> </div>
    </div>
  </div>
</div>
 
 
 
 
<script type="text/javascript">
$(function(){ 
  $(".searchBtn_click").click(function(event){
    event.stopPropagation();
    if($(this).hasClass("curr")){
      $(this).removeClass("curr");
      var sbl = $(this).offset().left;
      $(".search_box").animate({'opacity':0},100,function(){
        setTimeout(function(){
            $(".search_box").removeAttr("style").hide();
        },200)
      });
      $(this).parents(".saerch_btn").removeAttr("style");
    }else{
      $(this).addClass("curr");
      var sWidth = $(window).width();
      var sbl = $(this).offset().left;
      var hcw = $(this).parents(".container").width();
      if($(window).width() >= 979 ){
        $(".search_box").css({width:(hcw-200)*0.5,'right':sWidth-sbl,'display':'block',"opacity":'0'}).animate({'opacity':1},200,function(){
          $(this).find(".text").focus()
        });
      }else{
        $(".search_box").css({width:(hcw-15),'right':sWidth-sbl,'display':'block',"opacity":'0'}).animate({'opacity':1},200,function(){
          $(this).find(".text").focus()
        });
      }
    }
  })
  $("body").click(function(){
    if($(".searchBtn_click").hasClass("curr")){
      if($(window).width() >= 979 ){
        $(".searchBtn_click").trigger("click");
      }
    }
  })
  $(".search_box").click(function(e){
    e.stopPropagation();
  })
  
  $(".menu_btn,.menu_btn_close").click(function(){
    if($(".clickMenu_show_nav").hasClass("show")){
      $(".menu_btn,.menu_btn_close").removeClass("curr");
      $(".clickMenu_show_nav").removeClass("show");
    }else{
      $(".menu_btn,.menu_btn_close").addClass("curr");
      $(".clickMenu_show_nav").addClass("show");
    }
  })
  
  if ($(this).width() > 990) {
        if($(".js_no_header_fixed").length <= 0){
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 200) {
                    $(".header").addClass("header_fix");
                    $("body").css({"padding-top":$(".header").innerHeight()});
                } else {
                    $(".header").removeClass("header_fix");
                    $("body").removeAttr("style");
                }
            });
        }
    }else{
      if($(".js_no_pageTop_fixed").length <= 0){
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 200) {
                $(".pageTop").addClass("pageTop_fix");
                $("body").css({"padding-top":$(".pageTop").innerHeight()});
            } else {
                $(".pageTop").removeClass("pageTop_fix");
                $("body").removeAttr("style");
            }
        });
      }
      if($(".js_no_mobile_header_fixed").length <= 0){
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 200) {
                $(".mobile_header").addClass("mobile_header_fixed");
                $("body").css({"padding-top":$(".mobile_header").innerHeight()});
            } else {
                $(".mobile_header").removeClass("mobile_header_fixed");
                $("body").removeAttr("style");
            }
        });
      }
      $(".clickMenu_show_nav .nav > li").on('click',function(){
        if($(this).find("ul").is(":hidden")){
          $(this).addClass("curr").siblings("li").removeClass("curr");
          $(this).siblings("li").find("ul").slideUp();
          $(this).find("ul").slideDown();
        }else{
          $(this).removeClass("curr");
          $(this).find("ul").slideUp();
        }
      })
  }
  function getCookie(name){
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
    return unescape(arr[2]);
    else
    return null;
  }
  var spy_logined = getCookie("spy_logined");
  if(spy_logined){
    $(".user_login").html("<a href='https://my.spyzie.com/dashboard.html'>"+spy_logined+"</a><a href='https://my.spyzie.com/logout.html'>Log out</a>");
    $(".mobile_user_login").text("Account").attr("href","https://my.spyzie.com/dashboard.html");
    console.log(spy_logined);
  }else{
    console.log(spy_logined);
  }
});
</script>




<div class="login_page">
    <div class="box">
        <div class="box_centered">
            <div class="logoBox">
                <a href="https://www.spyzie.com" class="logo logo_spyzie_i">spyzie</a>
            </div>
            <h3 class="title">Login Spyzie</h3>
            <form id="w0" action="/login.html" method="post" role="form">
<input type="hidden" name="_csrf" value="vzfdM0puJwkAn54T2qeWlzWTEpo5F6AvK47hPIbZ54vXZoxeAChxYm-n7FGu4qHteswjy1xcx3Bt96Jyw4-d4Q==">                <div class="cont">
                    <div class="login_group">
                        <div class="form-group field-loginform-email">
<input type="text" id="loginform-email" class="form-control input-lg" name="LoginForm[email]" placeholder="Email"><div hidden><p class="help-block help-block-error"></p></div>
</div>
                        <div class="form-group passwordBox field-loginform-password">
<input type="password" id="loginform-password" class="form-control input-lg" name="LoginForm[password]" placeholder="Password"><span class="btn_passIcon"></span><div hidden><p class="help-block help-block-error"></p></div>
</div>                    </div>
                    <div class="has-error">
                        <span id="helpBlock" class="help-block"></span>
                    </div>
                </div>
                <div class="form-group-btn">
                    <button type="submit" class="btn btn-full btn-medium btn-lg" name="login-button">Login</button>                </div>
                <div class="form-group-btn">
                    <a href="/forget-password.html">Forgot Password?</a> - <a href="/signup.html" class="btn-link">Sign up</a>
                </div>
            </form>        </div>
    </div>
</div>




    <div class="footer">
  <div class="container">
    <div class="box clearfix">
      <div class="cont">
        <div class="item nav">
          <h6 class="title">Knowledge Base</h6>
          <ul>
            <li><a href="https://www.spyzie.com/track-gps-location.html">Location Tracking</a></li>
            <li><a href="https://www.spyzie.com/spy-text-messages.html">SMS Tracking</a></li>
            <li><a href="https://www.spyzie.com/how-to-spy-android-phones.html" title="How to Spy Android">Spy Android</a></li>
			<li><a href="https://www.spyzie.com/how-to-spy-iphone.html" title="How to Spy iPhone">Spy iPhone</a></li>
            <li><a href="https://www.spyzie.com/spy/">Tips & How-to Guides</a></li>
          </ul>
        </div>
        <div class="item nav">
          <h6 class="title">Company Info</h6>
          <ul>
            <li><a href="https://www.spyzie.com/about-us.html">About Spyzie</a></li>
            <li><a href="https://www.spyzie.com/promises.html">Our Promises</a></li>
            <li><a href="https://www.spyzie.com/business-inquiry.html">Business Inquiry</a></li>
            <li><a href="https://www.spyzie.com/contact-us.html">Contact Us</a></li>
            <li><a href="https://www.spyzie.com/report.html">Report Violation/Abuse</a></li>
            <li><a href="https://www.spyzie.com/affiliate-program.html">Affiliate Program</a></li>
          </ul>
        </div>
        <div class="item nav">
          <h6 class="title">Policies</h6>
          <ul>
            <li><a href="https://www.spyzie.com/legal-info.html">EULA</a></li>
            <li><a href="https://www.spyzie.com/refund-policy.html">Refund Policy</a></li>
            <li><a href="https://www.spyzie.com/privacy-policy.html">Privacy Policy</a></li>
            <li><a href="https://www.spyzie.com/compatibility-policy.html">Compatibility Policy</a></li>
            <li><a href="https://www.spyzie.com/cookies-policy.html">Cookies Policy</a></li>
            <li><a href="https://www.spyzie.com/affiliate-policy.html">Affiliate Policy</a></li>
            <li><a href="https://www.spyzie.com/feedback.html">Feedback&Refund</a></li>

          </ul>
        </div>
        <div class="item">
          <h6 class="title">Follow us</h6>
          <ul class="social">
            <li><a class="si si-facebook" target="_blank" href="https://www.facebook.com/Spyzie-1809198939406240"></a></li>
            <li><a class="si si-twitter" target="_blank" href="https://twitter.com/spyzieofficial"></a></li>
            <li><a class="si si-youtube" target="_blank" href="https://www.youtube.com/channel/UCvuLpNBuazO4BFLzGe0AeXg"></a></li>
          </ul>
        </div>
        <div class="item ir">
          <h6 class="title">Payment</h6>
          <div class="pay_img"> <img src="https://images.spyzie.com/images/payment_visa.png"> <img src="https://images.spyzie.com/images/payment_mm.png"> <img src="https://images.spyzie.com/images/payment_ae.png"></div>
        </div>
      </div>
      <div class="brand">
        <div class="logo logo_spyzie_w"><a href="https://www.spyzie.com/index.html">Spyzie</a></div>
      </div>
    </div>
    <div class="copyright">
      <div class="info">
        <p>Copyright © <script type="text/javascript">var myDate = new Date();var year = myDate.getFullYear();document.write(year) </script> Spyzie.com. All trademarks are the property of their respective owners.</p>
      </div>
       <div class="pic">
      <span id="siteseal">
      <script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=0ynR3O0AAbKzazqaUtRKt6pc9SB5LY7lOkQ3lDXoLtTIPKMGQZauFptGM9lG"></script>
      </span>
      <a href="https://www.stopbullying.gov/" target="_blank" rel="nofollow"><img src="https://images.spyzie.com/images/stopbullying.png" alt="Spyzie Parental Control Monitoring Tool listed by Government"></a>
      </div>
    </div>
    
    <div class="disclaimer">
		<p><strong>Disclaimer:</strong></p>
		<p>SPYZIE IS DESIGNED FOR LEGAL USE ONLY. It is a smartphone & tablet monitoring software that shall be used only with the aim of parental control of their children, by employers to monitor the devices which belong to them and on which the employees work, on a device which is of your ownership, and by you with a consent of a device owner. </p>
		<p>Failure to do so is likely to result in violation of applicable law that could result in severe monetary and criminal penalties imposed on the violator. You should consult your own legal advisor with respect to legality of using the application in the manner you intend to use it prior to registering, downloading, installing, and using it. Spyzie cannot be held responsible if a user chooses to monitor a device the user does not have the right to monitor; nor can Spyzie provide legal advice regarding the use of the Software. </p>
	</div>
  </div>
</div>
<a href="#totop" class="totop">Top</a> 
<script type="text/javascript">
$(function(){
	$(".footer .nav .title").click(function(){
		if($(window).width() <= 979 ){
			$(this).toggleClass("curr").parents(".nav").siblings(".nav").find(".title").removeClass("curr");
			$(this).next("ul").slideToggle().parents(".nav").siblings(".nav").find("ul").slideUp();;
		}
	})
});
</script>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96084094-1', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['my.spyzie.com', 'store.spyzie.com'] );
  ga('send', 'pageview');
  ga('set', 'userId', '')

</script>
<!-- Google Code for Remarketing Tag -->
<!-- Global site tag (gtag.js) - AdWords: 854983090 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-854983090"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-854983090');
</script>
<!--/Google Code for Remarketing Tag -->


<!-- Bing Code for Remarketing Tag -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5794834"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5794834&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
<!--/Bing Code for Remarketing Tag -->

<script type="text/javascript" id="uts_lp" src="//www.linkconnector.com/uts_lp.php?cgid=900969"></script>
    <script src="/assets/a66ef2de/yii.js?v=1512984771"></script>
<script src="/assets/a66ef2de/yii.validation.js?v=1512984771"></script>
<script src="/assets/a66ef2de/yii.activeForm.js?v=1512984771"></script>
<script src="https://statics.spyzie.com/js/lib/icheck.min.js?v=1512984771"></script>
<script src="https://statics.spyzie.com/js/common/spy-global.min.js?v=1516603721"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
});

var login_timer = null;
clearInterval(login_timer);
login_timer = setInterval(function() {
    if($('.login_group').find('.has-error').length>0){
        $('#helpBlock').text($('.login_group .has-error .help-block-error').eq(0).text());
    }else{
        $('#helpBlock').text('');
    }
}, 200);
</script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#w0').yiiActiveForm([{"id":"loginform-email","name":"email","container":".field-loginform-email","input":"#loginform-email","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email cannot be blank."});value = yii.validation.trim($form, attribute, []);yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password cannot be blank."});}}], {"successCssClass":""});
});</script>                <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-96084094-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['spyzie.com', 'store.spyzie.com']);
            ga('send', 'pageview');
            ga('set', 'userId', '');
        </script>
            </body>
    </html>
