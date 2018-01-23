
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Messages - Live Demo</title>
        <script type="text/javascript">
            var FROM_APP = "0";
            var SPY_DEVICES_NUM = 2;
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
<script src="https://statics.spyzie.com/js/lib/jquery-2.1.4.bootstrap.min.js?v=1516603721"></script>
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="4X67ydJ8qF6d9fNrO4cIFrG29qHbwIvlPmODOUsZLBGJL-qkmDr-NfLNgSlPwj9s_unH8L6L7Lp4GsB3Dk9Wew==">
    </head>
    <body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
        
<!--app hide-->
    <!--mobile top-->
    <div class="mobile_header visible-xs-block visible-sm-block">
        <a href="javascript:void(0)" class="menu_btn mobile-menu"><i class="si si-menu"></i></a>
                    <a href="/signup.html"
               class="btn_try_now btn_try_now_other">TRY NOW</a>
                <div class="column">Spyzie</div>
    </div>
    <!--end mobile top-->

    <!-- live demo -->
    <div class="livedemo_tab">
                    <div class="livedemo_top">
                <a href="/livedemo/dashboard.html?devices_id=1" class="curr"><i class="si si-android"></i> Android Demo</a>
                <a href="/livedemo/dashboard.html?devices_id=2">see iOS demo >></a>
            </div>
            <div class="livedemo_tab_group">
                <a href="/livedemo/dashboard.html?devices_id=1" class="curr">Android Demo</a>
                <a href="/livedemo/dashboard.html?devices_id=2">iOS Demo</a>
            </div>
            </div>
    <!-- live demo end -->

<div class="page_container">
    <!--app hide-->
            <!--sidebar-->
        <div class="main_sidebar">
            <div class="sidebar_menu">
                <div class="side_header">
                    <div class="logo_box"><a href="https://www.spyzie.com" target="_blank"
                                             class="logo logo_spyzie">Spyzie</a></div>

                    <!--refresh now start-->
                                            <div class="account_info">
                            livedemo@spyzie.com                            <div class="sync_time">
                                <div class="time">
                                                                                                                                                            <button type="button" class="btn btn-link btn_sync"><span><i class="si si-sync"></i></span></button>                                                                                <i>
                                            Be updated:                                            Apr 10, 2017 11:28                                        </i>
                                                                    </div>
                            </div>
                        </div>
                                        <!--refresh now end-->
                    <div class="select_device select_device_dropdown">
                        <div class="btn_dropdown">
                            <span class="icon"><i class="si si-phone"></i></span>
                                                        <span class="name" title="Demo's Galaxy S7">
                                    Demo&#039;s Galaxy S7                                </span>
                        </div>
                    </div>
                </div>
                <div class="nav side_select_nav" style="display:none;">
                    <ul>
                                                    <li>
                                <a href="/livedemo/dashboard.html?devices_id=2"
                                   title="Demo's iPhone">
                                    <i class="si si-phone"></i>
                                    <span>Demo&#039;s iPhone</span>
                                </a>
                            </li>
                                                <li><a href="/wizard.html"><i
                                        class="si si-add"></i><span>Add new device</span></a>
                        </li>
                    </ul>
                </div>
                <div class="nav side_select_nav side_menu">
                    <ul>
                                                                                                                                            <li id="site_index">
                                                                        <a href="/livedemo/dashboard.html"><i
                                                class="si si-dashboard"></i><span>Dashboard</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="call_log_index">
                                                                        <a href="/livedemo/call-log.html"><i
                                                class="si si-call"></i><span>Calls</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="contacts_index">
                                                                        <a href="/livedemo/contacts.html"><i
                                                class="si si-contacts"></i><span>Contacts</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="sms_index" class="curr">
                                                                        <a href="/livedemo/sms.html"><i
                                                class="si si-message"></i><span>Messages</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="social_apps_" class="level">
                                                                        <a href="javascript:;"><i
                                                class="si si-socialapps"></i><span>Social Apps <span class="label">HOT</span></span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                    <ul><li id="whats_app_index"><a href="/livedemo/whats-app.html"><span>WhatsApp</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_facebook"><a href="/livedemo/social-apps/facebook.html"><span>Facebook</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_messenger"><a href="/livedemo/social-apps/messenger.html"><span>Messenger</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_snapchat"><a href="/livedemo/social-apps/snapchat.html"><span>Snapchat</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_skype"><a href="/livedemo/social-apps/skype.html"><span>Skype</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_line"><a href="/livedemo/social-apps/line.html"><span>LINE</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_instagram"><a href="/livedemo/social-apps/instagram.html"><span>Instagram</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_viber"><a href="/livedemo/social-apps/viber.html"><span>Viber</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_kik"><a href="/livedemo/social-apps/kik.html"><span>Kik</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_tinder"><a href="/livedemo/social-apps/tinder.html"><span>Tinder</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_wechat"><a href="/livedemo/social-apps/wechat.html"><span>WeChat</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_qq"><a href="/livedemo/social-apps/qq.html"><span>QQ</span><i class="new_icon new_icon3 hide"></i></a></li><li id="social_apps_hangouts"><a href="/livedemo/social-apps/hangouts.html"><span>Hangouts</span><i class="new_icon new_icon3 hide"></i></a></li></ul>                                </li>
                                                                                                                                                <li id="location_index">
                                                                        <a href="/livedemo/location.html"><i
                                                class="si si-location_mark"></i><span>Locations</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="geo_fence_index">
                                                                        <a href="/livedemo/geo-fence.html"><i
                                                class="si si-geo_fence"></i><span>Geofences <span class="label">HOT</span></span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="screenshots_index">
                                                                        <a href="/livedemo/screenshots.html"><i
                                                class="si si-screenshot"></i><span>Capture Screenshots</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="browser_log_index">
                                                                        <a href="/livedemo/browser-log.html"><i
                                                class="si si-history"></i><span>Browser History</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="images_index">
                                                                        <a href="/livedemo/images.html"><i
                                                class="si si-photos"></i><span>Photos</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="videos_index">
                                                                        <a href="/livedemo/videos.html"><i
                                                class="si si-video"></i><span>Video Preview</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="calendar_index">
                                                                        <a href="/livedemo/calendar.html"><i
                                                class="si si-calendar"></i><span>Calendars</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="key_logger_index">
                                                                        <a href="/livedemo/key-logger.html"><i
                                                class="si si-keylogger"></i><span>Keylogger <span class="label">HOT</span></span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="apps_index">
                                                                        <a href="/livedemo/apps.html"><i
                                                class="si si-appstore"></i><span>Applications</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="device_schedule_index">
                                                                        <a href="/livedemo/device-schedule.html"><i
                                                class="si si-device_schedule"></i><span>Schedule Restriction</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="app_activity_index">
                                                                        <a href="/livedemo/app-activity.html"><i
                                                class="si si-app_activity"></i><span>App Activity</span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                                                                                                <li id="toggle_alerts_index">
                                                                        <a href="/livedemo/toggle-alerts.html"><i
                                                class="si si-toggle_alerts"></i><span>Keyword Alerts <span class="label">HOT</span></span><i class="new_icon new_icon3 hide"></i>                                    </a>
                                </li>
                                                                        </ul>
                    <ul class="other">
                        <li><a href="https://www.spyzie.com/faq.html" target="_blank"><i
            class="si si-help"></i><span>Help</span></a></li>
<li><a href="https://www.spyzie.com/feedback.html" target="_blank"><i
            class="si si-feedback"></i><span>Feedback</span></a>
</li>
<li><a href="/logout.html"><i
            class="si si-logout"></i><span>Log out</span></a>
</li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                        <li><span>&nbsp;</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end sidebar-->
        <!--mian content-->
    <!--main_content add app_main when app request-->
    <div class="main_content ">
        <div class="main_header">
            <ul class="user-info-menu hidden-xs hidden-sm">
                        <li class="user-profile-link">
                <a href="/signup.html"><b
                            class="btn_try_now">TRY NOW</b></a>
            </li>
                </ul>                            <h1 class="column">Messages</h1>
                    </div>

        
    <div class="commonAlert">
            </div>



<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel-header panel_operation clearfix">
            <div class="screen">
                <form action="/livedemo/sms.html" method="get"><div class="search"><div class="box"><input type="text" name="search" value="" placeholder="Search"><button type="submit"><i class="si si-search"></i></button></div></div></form>            </div>
        </div>

        <!--info list-->
        <div class="row">
                        <div class="col-md-5">
                <div class="users_list list_click">
                    <div class="full-height-scroll" style="overflow: hidden; width: auto; height: 100%;">
                        <ul id="infinateScroll" max-page="1" now-page="1">
                            <li>    <a href="javascript:void(0)" rel="6" ids="13426450006" class='curr'>        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/b.png"></span>        <div class="user_info">            <span class="user_name">Théophane</span>            <p title="I don&#039;t have time, though.">I&nbsp;don&#039;t&nbsp;have&nbsp;time,&nbsp;though.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="4" ids="07427466444" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/c.png"></span>        <div class="user_info">            <span class="user_name">Tobias&nbsp;Wagenschwanz</span>            <p title="looks like I&#039;m going to ask for a time off again.">looks&nbsp;like&nbsp;I&#039;m&nbsp;going&nbsp;to&nbsp;ask&nbsp;for&nbsp;a&nbsp;time&nbsp;off&nbsp;again.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="5" ids="3102472165" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/e.png"></span>        <div class="user_info">            <span class="user_name">Tom&nbsp;Brackey</span>            <p title="Maybe not, but I do know you.">Maybe&nbsp;not,&nbsp;but&nbsp;I&nbsp;do&nbsp;know&nbsp;you.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="10" ids="064215379" >        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1698026316.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674329&Signature=%2F2eAvdgG%2F%2F%2BDDvW93ORhBI5wRnA%3D"></span>        <div class="user_info">            <span class="user_name">Michelle</span>            <p title="Once you don&#039;t stay in touch with for too long, It&#039;ll be not about parent, It&#039;ll be about police.">Once&nbsp;you&nbsp;don&amp;#039;t&nbsp;stay&nbsp;in&nbsp;touch&nbsp;with&nbsp;for&nbsp;too&nbsp;long,...</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="7" ids="4022911000" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/default_avatar.png"></span>        <div class="user_info">            <span class="user_name">4022911000</span>            <p title="Three or four days hereafter, I&#039;ll be fine, no need to.">Three&nbsp;or&nbsp;four&nbsp;days&nbsp;hereafter,&nbsp;I&#039;ll&nbsp;be&nbsp;fine,&nbsp;no&nbsp;need&nbsp;to.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="2" ids="+18587043344" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/default_avatar.png"></span>        <div class="user_info">            <span class="user_name">+18587043344</span>            <p title="Okay ... wish you guys a good time ...">Okay&nbsp;...&nbsp;wish&nbsp;you&nbsp;guys&nbsp;a&nbsp;good&nbsp;time&nbsp;...</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="1" ids="153174950" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/a.png"></span>        <div class="user_info">            <span class="user_name">KR&nbsp;Dkfm.&nbsp;Leopold&nbsp;Wundsam</span>            <p title="It does not sound like a good idea.">It&nbsp;does&nbsp;not&nbsp;sound&nbsp;like&nbsp;a&nbsp;good&nbsp;idea.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="9" ids="9311809567" >        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1824784874.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674329&Signature=Lj382m%2BNbHat0CyKyROMjp4rUGo%3D"></span>        <div class="user_info">            <span class="user_name">Bharti</span>            <p title="Stay out of my sight, Bharti.">Stay&nbsp;out&nbsp;of&nbsp;my&nbsp;sight,&nbsp;Bharti.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="3" ids="9105090804" >        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/f.png"></span>        <div class="user_info">            <span class="user_name">Kathleen&nbsp;J.&nbsp;Welch</span>            <p title="I want to know why did you blab my secret to Danny.">I&nbsp;want&nbsp;to&nbsp;know&nbsp;why&nbsp;did&nbsp;you&nbsp;blab&nbsp;my&nbsp;secret&nbsp;to&nbsp;Danny.</p>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="8" ids="123456678" >        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/-368577425.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674329&Signature=q1GDGr4cYeXe0xnPR7P6WO4oTVo%3D"></span>        <div class="user_info">            <span class="user_name">Andy</span>            <p title="Poor little girl, you have no idea what you&#039;ve done.">Poor&nbsp;little&nbsp;girl,&nbsp;you&nbsp;have&nbsp;no&nbsp;idea&nbsp;what&nbsp;you&#039;ve&nbsp;done.</p>        </div>    </a></li>                            <template v-for="list in data">
                                <sms_list v-for="item in list" v-bind:item="item"></sms_list>
                            </template>
                        </ul>

                        <div class="loading hide">
                            <div class="spinner2"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="detail_box message_detail list_detail">
                    <div class="btn_back hide"><a href="#" class="btn-full-radius5-black list_click_back"><i
                                    class="si si-arrow_left"></i></a></div>
                    <div class="spinner2"><span></span></div>
                    <div class="message_header box_top hide">
                        <span class="user_img phone_img"><img v-bind:src="data.avatar"></span>
                        <span>To:</span> <strong class="user_name" v-html="data.to"></strong>
                    </div>
                    <div class="box_cont message_cont hide">
                        <div class="full-height">
                            <dl v-for="(list, key) in data.data">
                                <dt class="detail_calendar"><span class="date" v-html="key"></span></dt>
                                <dd>
                                    <template v-for="item in list">
                                        <div class="item item_r " v-if="item.isMine">
                                            <div class="info" v-html="item.body"></div>
                                            <div class="time" v-html="item.time"></div>
                                        </div>
                                        <div class="item" v-else>
                                            <div class="info" v-html="item.body"></div>
                                            <div class="time" v-html="item.time"></div>
                                        </div>
                                    </template>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
        <!--end info list-->

    </div>
</div>

<script>
    function appWebForbidReload()
    {
        return true;
    }
</script>




    </div>
    <!--end main content-->
            <div class="main_footer">
            Copyright © 2018 Spyzie. All Rights Reserved.                <div class="language dropup">
        <a href="javascript:void(0);" class="flag flag-en dropdown-toggle" id="dropdownMenu1"
           data-toggle="dropdown" aria-expanded="false"><span>English</span></a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=es"
                       class="flag flag-es"><span>Español</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=pt-BR"
                       class="flag flag-br"><span>Português</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=fr"
                       class="flag flag-fr"><span>Français</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=de"
                       class="flag flag-de"><span>Deutsch</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=it"
                       class="flag flag-it"><span>Italiano</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=nl"
                       class="flag flag-nl"><span>Nederlands</span></a></li>
                            <li>
                    <a href="https://my.spyzie.com/livedemo/dashboard.html?lang=ar"
                       class="flag flag-ar"><span>العربية</span></a></li>
                            <li>
                    <a href="https://my.spyzie.jp/livedemo/dashboard.html?lang=ja"
                       class="flag flag-ja"><span>日本語</span></a></li>
                    </ul>
    </div>
        </div>
    </div>

    <script type="text/javascript" src="https://statics.spyzie.com/js/lib/require.min.js?v=1512984771" data-main="https://statics.spyzie.com/js/main.min.js?v=1516169022"></script>
<script src="https://statics.spyzie.com/js/common/spy-global.min.js?v=1516603721"></script>
<script type="text/javascript">
            var param = [];


ws_init = {
    'ws_url' : 'wss://ws.spyzie.com:4431',
};
function runCheckSync() 
{
    $.getJSON('/site/check-sync.html', function(json){
        var need_reload = false;
        $.each(json,function(name,value) {
            if(parseInt(value) > 0) {
                $('#' + name + '>a i.new_icon').removeClass('hide').show();
                if(name == 'sms_index') {
                    need_reload = true;
                }
                if(name == 'screenshots_index' || name == 'camera_capture_index'){
                    need_reload = false;
                }
            }
        });
        if(need_reload){
            setTimeout('window.location.reload();',1000);
        }
    });
}</script>
<script type="text/javascript">jQuery(function ($) {
            $('form').submit(function (e) {
                e.preventDefault();
                var link = '/livedemo/sms.html', date = '', search = 'search', param = {}, _param = [];
                if(date) {
                    param = $.extend(param, {'date' : date});
                }
                if(search || $('input[name=search]').val()) {
                    param = $.extend(param, {'search' : encodeURIComponent($.trim($('input[name=search]').val()))});
                }
                for(var key in param){
                    if(param[key]!=''){_param.push(key + '=' + param[key]);} 
                }
                
                param = _param.join('&');
                window.location.href = param=='' ? link : link + '?' + param;
            });
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
            ga('set', 'userId', 'J11w2tCiactiIA1iu9HktQ');
        </script>
                <!-- Google Code for Remarketing Tag -->
        <!-- Global site tag (gtag.js) - AdWords: 854983090 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-854983090"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'AW-854983090');
        </script>
        <!--/Google Code for Remarketing Tag -->


        <!-- Bing Code for Remarketing Tag -->
        <script>(function (w, d, t, r, u) {
                var f, n, i;
                w[u] = w[u] || [], f = function () {
                    var o = {ti: "5794834"};
                    o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
                }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function () {
                    var s = this.readyState;
                    s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
                }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
            })(window, document, "script", "//bat.bing.com/bat.js", "uetq");</script>
        <noscript><img src="//bat.bing.com/action/0?ti=5794834&Ver=2" height="0" width="0"
                       style="display:none; visibility: hidden;"/></noscript>
        <!--/Bing Code for Remarketing Tag -->

        <script type="text/javascript" id="uts_lp" src="//www.linkconnector.com/uts_lp.php?cgid=900969"></script>
        </body>
    </html>

