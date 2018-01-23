
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Applications - Live Demo</title>
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
    <meta name="csrf-token" content="0rqx8C3uAoUSzB46sq-5n7A2CgsLp1W7tvr--Cp4pzi66-CdZ6hU7n30bHjG6o7l_2k7Wm7sMuTwg722by7dUg==">
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
                                                                                                                                                <li id="sms_index">
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
                                                                                                                                                <li id="apps_index" class="curr">
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
                </ul>                            <h1 class="column">Applications</h1>
                    </div>

        
    <div class="commonAlert">
            </div>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel-header panel_operation clearfix">
            <div class="operation_sett setting">
                <div class="name">
                    Block All Apps                </div>
                <div class="inputBox i-checks" id="block_all">
                    <label>
                        <input type="checkbox" >
                    </label>
                </div>
            </div>
            <div class="screen">
                <form action="/livedemo/apps.html" method="get"><div class="search"><div class="box"><input type="text" name="search" value="" placeholder="Search"><button type="submit"><i class="si si-search"></i></button></div></div></form>            </div>
        </div>

        <!--app list-->
        <div class="panel-main app_list2" id="infinitescroll">
            <ul>
                                                                                                            <li id="app_65">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813007.22.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=cKyHX7vCGI888F2udrLXjf9kzV8%3D"></div>
                                <div class="info">
                                    <div class="name">Adobe Acrobat<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="65" data-package_name="com.adobe.reader" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_502">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144207.06.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=RmzeouorMFg9myDHHA60ws4WQLU%3D"></div>
                                <div class="info">
                                    <div class="name">Airbnb<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="502" data-package_name="com.airbnb.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_63">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813006.54.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=SbfF%2F5yh9JIvLmuZBQy0woch7Rk%3D"></div>
                                <div class="info">
                                    <div class="name">Amazon Shopping<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="63" data-package_name="cn.amazon.mShop.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_486">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144203.02.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=vJEVSGfa7yEvQ1skww4y53om7Tk%3D"></div>
                                <div class="info">
                                    <div class="name">BBC News<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="486" data-package_name="bbc.mobile.news.ww" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_61">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813005.74.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=LkFRia8tuwwdv36t7WnWgc8s6GE%3D"></div>
                                <div class="info">
                                    <div class="name">CamScanner<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="61" data-package_name="com.intsig.camscanner" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_72">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491793207.86.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=T3J0jY0%2BpVJj5jwnKYhkL2fezOs%3D"></div>
                                <div class="info">
                                    <div class="name">Chrome<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="72" data-package_name="com.android.chrome" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_485">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144202.66.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=LH%2B%2BZ%2F7Lq1XpwjOxBV%2Fmi8voWUQ%3D"></div>
                                <div class="info">
                                    <div class="name">CNN<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="485" data-package_name="com.cnn.mobile.android.phone" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_493">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144205.25.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=S%2Fmo3djluH6gUyb2DL4n2khhkgw%3D"></div>
                                <div class="info">
                                    <div class="name">Duo<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="493" data-package_name="com.google.android.apps.tachyon" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_69">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813008.08.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=8iXAPN%2BUCec9ivc8cZJCsgmrHq8%3D"></div>
                                <div class="info">
                                    <div class="name">Evernote<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="69" data-package_name="com.evernote" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_491">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491904803.72.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=Xjsaxo3Qos5YvNNcmQWMpdAwvMA%3D"></div>
                                <div class="info">
                                    <div class="name">Instagram<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="491" data-package_name="com.instagram.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_60">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813005.2.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=YuV0Yaw4Oh2C7oouEX4LgeNezvE%3D"></div>
                                <div class="info">
                                    <div class="name">Keep<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="60" data-package_name="com.gotokeep.keep" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_494">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144205.5.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=FgVO92Fx21qBywEI22gAuYI3nbQ%3D"></div>
                                <div class="info">
                                    <div class="name">Maps<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="494" data-package_name="com.google.android.apps.maps" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_62">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813006.29.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=snVPyew5UCII7%2FoLG1CsdOiA8c4%3D"></div>
                                <div class="info">
                                    <div class="name">Microsoft Excel<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="62" data-package_name="com.microsoft.office.excel" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_59">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813004.84.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=G1HJfP299zI7KhaoWsU8q6zzXnA%3D"></div>
                                <div class="info">
                                    <div class="name">OneNote<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="59" data-package_name="com.microsoft.office.onenote" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_490">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144204.5.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=ah1YHIsigy8r2Hq%2F%2FXia%2F7M%2FtpQ%3D"></div>
                                <div class="info">
                                    <div class="name">Opera Mini<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="490" data-package_name="com.opera.mini.native" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_501">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144206.83.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=%2FtNwZdWuTLL7W8Bp64opwiJ5xtc%3D"></div>
                                <div class="info">
                                    <div class="name">Pinterest<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="501" data-package_name="com.pinterest" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_496">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144205.71.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=uBsSVoPSLy4soKfnjxOJ36mxOtI%3D"></div>
                                <div class="info">
                                    <div class="name">Quora<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="496" data-package_name="com.quora.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_68">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813007.89.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=HtcUdt%2FfjQYC2pnSi5%2FpLz8qE6M%3D"></div>
                                <div class="info">
                                    <div class="name">Snapchat<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="68" data-package_name="com.snapchat.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_489">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144204.02.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=Pfqh2B18bnUxziiGv0yrg82Kjhw%3D"></div>
                                <div class="info">
                                    <div class="name">Steam<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="489" data-package_name="com.valvesoftware.android.steam.community" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_67">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813007.73.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=Xsvv2vkZc0nT0tfLDcTgz6e06pA%3D"></div>
                                <div class="info">
                                    <div class="name">TED<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="67" data-package_name="com.ted.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_499">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491998404.46.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=VyaO0ZZMB1mtZdhNShXZEZPwKSU%3D"></div>
                                <div class="info">
                                    <div class="name">Tumblr<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="499" data-package_name="com.tumblr" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_484">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144202.15.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=xNlFwg%2F1GQrizHV4o2z3dP281pQ%3D"></div>
                                <div class="info">
                                    <div class="name">Twitch<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="484" data-package_name="tv.twitch.android.app" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_497">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144206.55.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=4YBo9bmL2aBOCSjhZSqteZynsjE%3D"></div>
                                <div class="info">
                                    <div class="name">Twitter<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="497" data-package_name="com.twitter.android" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_492">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1492144204.99.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=fsr4fI03DVz5L4RMbqPA2U%2Bo5eY%3D"></div>
                                <div class="info">
                                    <div class="name">Vice<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="492" data-package_name="com.vice.viceforandroid" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_64">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813007.0.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=biayWEUM3zsGGGGGnPZIkAw9nrY%3D"></div>
                                <div class="info">
                                    <div class="name">Vimeo<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="64" data-package_name="com.vimeo.android.videoapp" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_495">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491904803.24.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=pOsS5vXQ836me7aKXAgu08L5jUs%3D"></div>
                                <div class="info">
                                    <div class="name">WhatsApp<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="495" data-package_name="com.whatsapp" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_58">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491813004.32.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=UiliuSrG4Hn2lNFGlRmoNm9Sck8%3D"></div>
                                <div class="info">
                                    <div class="name">WPS Office<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="58" data-package_name="cn.wps.moffice_eng" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                                                                <li id="app_500">
                            <div class="appinfo">
                                <div class="pic"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/icos/apps/android/1491793206.85.png?security-token=CAISjgN1q6Ft5B2yfSjIrYDMI%2FL32Z5xgZa6ZEzVkFUlS%2F1Z3Z3Bjzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148zLX%2FZPmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAAUm%2BSR8sdF1b1rdQbooGzV1hjs1XQRNdZmEddVtROfDmoMKP%2FLG4CuPFIF6S4Za85Mf4IsmK49U9M%2BvOHnLeVkcYe3TtWcBvDbtg%2B6GYBFGFSApHtxwKj3HQavF9MV1l52%2FaZ2jFeVK8dwuzp2fua%2BFF%2FCxUX2B7V%2BlStFBkeEIm&x-oss-process=image%2Fresize%2Cm_lfit%2Ch_96&OSSAccessKeyId=STS.LCyhHC4AP6TQfjdtUpGru2Xjm&Expires=1516675508&Signature=a1an04Fd8tw8ft9E%2FM76WToCUKM%3D"></div>
                                <div class="info">
                                    <div class="name">YouTube<span class="blocked"  style="display:none;">(Blocked)</span></div>
                                </div>
                            </div>
                            <div class="otherinfo">
                                <div class="inputBox">
                                    <input name="switch-checkbox" type="checkbox" data-status="1" data-submit_block="0" data-id="500" data-package_name="com.google.android.youtube" data-size="mini" data-switch-toggle="off" checked>
                                </div>
                            </div>
                        </li>
                                                                    </ul>
        </div>
    </div>
</div>

<div class="modal fade in alert_modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="appCheckbox_pop">
                    <div class="pic"><img src="https://statics.spyzie.com/images/app_block.png" alt=""></div>
                    <div class="info">
                        <div class="txt">
                            <p>Once you block a certain app, the following message will be displayed on the monitored device when the app is clicked.</p>
                        </div>
                    </div>
                    <div class="btnBox">
                        <a href="javascript:void(0);" class="btn btn-border come-back" data-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-full block_btn" data-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="paging clearfix hidden-xs hidden-sm">
    <div class="showing_entries">
        Showing 1 to 28 of 28 entries    </div>
    <div class="navigation">
        <div class="show_entries btn dropup">
            <div class="dropdown-toggle" data-toggle="dropdown"><span>
                    Show 50 entries                </span>
                <i class="si si-angle_down"></i>
            </div>

            <ul class="dropdown-menu"><li><a href="/livedemo/apps.html?page=1&amp;per-page=10">10</a></li>
<li><a href="/livedemo/apps.html?page=1&amp;per-page=25">25</a></li>
<li><a href="/livedemo/apps.html?page=1">50</a></li>
<li><a href="/livedemo/apps.html?page=1&amp;per-page=100">100</a></li></ul>        </div>

            </div>
</div>

<div id="infinitescroll_navigation"><a href="/livedemo/apps.html?page=2"></a></div><div class="loading"></div>




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

    <script src="https://statics.spyzie.com/js/lib/jquery.infinitescroll.js?v=1512984771"></script>
<script type="text/javascript" src="https://statics.spyzie.com/js/lib/require.min.js?v=1512984771" data-main="https://statics.spyzie.com/js/main.min.js?v=1516169022"></script>
<script src="https://statics.spyzie.com/js/common/spy-global.min.js?v=1516603721"></script>
<script type="text/javascript">
            var param = [];


    var api_url = '/livedemo/apps/block-apps.html',
        app_num = 28,
        has_block_num = 0,
        block_all = false,
        block_app_title = 'Block App',
        block_all_apps_title = 'Block All Apps',
        requireJs_apps = true;


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
                if(name == 'apps_index') {
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
                var link = '/livedemo/apps.html', date = '', search = 'search', param = {}, _param = [];
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
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {        $('#infinitescroll ul').infinitescroll({
                loading: {
                    msgText: '<div class="spinner2"><span></span></div>',
                    img: '',
                    finishedMsg: '<span>no more</span>',
                    selector: '.loading' //loading
                },
                navSelector: "#infinitescroll_navigation",
                nextSelector: "#infinitescroll_navigation a",
                itemSelector: "#infinitescroll ul li",
                dataType: "html",
                maxPage: '1',
                debug: '',
                animate: '',
                extraScrollPx: '150',
                bufferPx: '40',
                errorCallback: function () {

                },
                path: function (index) {
                    var url = '/livedemo/apps.html?page=2';
                    url = url.replace("page=2", "page=" + index);
                    return url;
                }
            },
            function (newElements, data, url) {
                $('input[name="switch-checkbox"]').bootstrapSwitch();
            })}
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

