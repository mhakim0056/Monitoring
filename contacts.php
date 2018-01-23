
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Contacts - Live Demo</title>
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
    <meta name="csrf-token" content="uJpvmV24ezbpu35jKXORajbTOfZhVt18dpLM18oU0ozQyz70F_4tXYaDDCFdNqYQeYwIpwQduiMw64-Zj0Ko5g==">
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
                                                                                                                                                <li id="contacts_index" class="curr">
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
                </ul>                            <h1 class="column">Contacts</h1>
                    </div>

        
    <div class="commonAlert">
            </div>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel-header panel_operation clearfix">
            <div class="screen">
                <form action="/livedemo/contacts.html" method="get"><div class="search"><div class="box"><input type="text" name="search" value="" placeholder="Search"><button type="submit"><i class="si si-search"></i></button></div></div></form>            </div>
<!--            <div class="view_mode btn-group">-->
<!--                <a href="javascript:void(0)" class="btn btn-default active"><i class="si si-table"></i><span>TABLE VIEW</span></a>-->
<!--                <!-- <a href="javascript:void(0)" class="btn btn-default"><i class="si si-chart"></i><span>MAP VIEW</span></a> -->
<!--            </div>-->
        </div>

        <!--info list-->
        <div class="row">
                        <div class="col-md-5">
                <div class="users_list list_click">
                    <div class="full-height-scroll">
                        <ul id="infinateScroll" max-page="1" now-page="1">
                            <li>    <a href="javascript:void(0)" rel="8"class="curr">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/856446821.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=7D2TBxwaooWxrfBT4NjWW2jlMrw%3D"></span>        <div class="user_info">            <span class="user_name">Adrienne L. Lee</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="3">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/302991308.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=Qe6nriOC3QYmHEO1DzWlnY%2F0ECM%3D"></span>        <div class="user_info">            <span class="user_name">Alexander</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="5">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/-368577425.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=t1jldjh%2Fpb%2FzQw%2FN3RpIF%2B3OxWM%3D"></span>        <div class="user_info">            <span class="user_name">Andy</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="7">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1824784874.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=wGiV9XoHdsnFsLj%2FvM%2BlMR1vtOg%3D"></span>        <div class="user_info">            <span class="user_name">Bharti</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="15">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1624091392.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=CKzdN4aN8D2Ofg6esGdpzKW%2BLg0%3D"></span>        <div class="user_info">            <span class="user_name">Charles J. Ogletree, Jr.</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="11">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1051839484.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=N7JnhgD5lpPBp3CSCpPQXJhIKm4%3D"></span>        <div class="user_info">            <span class="user_name">Clive Moore</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="9">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/-731316700.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=zYyL8SNkeS88vEQrxM3%2F5%2FSVKnU%3D"></span>        <div class="user_info">            <span class="user_name">Helen Lee</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="10">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/g.png"></span>        <div class="user_info">            <span class="user_name">John McComb</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="6">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/186788936.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=Xplq3RBTgs3T42SAB5t3HNdLAPM%3D"></span>        <div class="user_info">            <span class="user_name">Jost Behre</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="22">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/f.png"></span>        <div class="user_info">            <span class="user_name">Kathleen J. Welch</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="24">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/a.png"></span>        <div class="user_info">            <span class="user_name">KR Dkfm. Leopold Wundsam</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="23">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/804788844.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=I5CcK3VSJaF6w%2FaVH4aqQyZqvGI%3D"></span>        <div class="user_info">            <span class="user_name">Kurt K. Wickham</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="26">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/1698026316.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=tDTKbYk06untsUZB9rDA0yadbd4%3D"></span>        <div class="user_info">            <span class="user_name">Michelle</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="12">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/367672936.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=CGTrP%2BkJJrGZMx5H8NcOsFR7%2BaY%3D"></span>        <div class="user_info">            <span class="user_name">Nicolucci Guto</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="16">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/-526949815.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=4EHnS%2Fwh4zMhMPROPn3wGvFl6KE%3D"></span>        <div class="user_info">            <span class="user_name">Stary Cai</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="17">        <span class="user_img phone_img"><img src="https://mg-spyzie.oss-us-west-1.aliyuncs.com/925ad7fd15aeb6610e98317d5e5948c7/00000000-0ae6-90c1-ffff-ffffd85bcc7a/attached/-1313140290.png?security-token=CAISjgN1q6Ft5B2yfSjIp5SAKsnz2KZp%2BYe7ah7CqWo%2BPsx4m%2FbRhzz2IH1MfnhsCOAcvvwym29Y7vkalqJ4T55IQ1Dza8J148yHYeFMmc6T1fau5Jko1bctcAr6UmxJta2%2FSuH9S8ynkJ7PD3nPii50x5bjaDymRCbLGJaViJlhHNZ1Ow6jdmhpCctxLAlvo9N4UHzKLqSVLwLNiGjdB1YKwg1nkjFT5KCy3sC74BjTh0GYr%2BgOvNbVI4O4V8B2IIwdI9Cux75ffK3bzAtN7wRL7K5skJFc%2FTDOsrP6BEJKsTGHKPbz%2BN9iJxNiHIxYfZRJt%2F%2Fhj%2FZ1l%2FXOnoDssXZ3MPpSTj7USfL4orTNE%2Fj7Mc0iJ%2FSpeSbI3ZWULojnsg5jIxBmPQhRKd06MS0yW15%2BTz6fMbe26lHHQH%2F6EfbbiP5uj8EolAu3ooLXHTXVHeXFixR%2FE4QnckYlOyQR2WHcaaIce2ROCQg6X%2BzEEdQjNkAG9Py37VWNDjcFyWpM%2BvjxIujOq%2BUFdpUOrBf9eQ3qDhqAATC0owFx536xypthkibmSPNi%2FhmbYCwBR4J%2B%2B%2FCOhTw2B5aWytBrBwqNZxctub%2BIjoRZcnZQmM%2FMJC9sBWKlkT3zUtjGr5xradcj7blwdKOpY2CMotF2Tj445xSBGKp5bFHZKwnfc85n6qGl9sBsKTLSNvk%2F3%2FVhtCZqTJlh1I5D&OSSAccessKeyId=STS.FW5asG5yHNEPh8sMjk2CTt3ze&Expires=1516674267&Signature=0KzVCiZt%2FctkvgpnJxV2l97dpLw%3D"></span>        <div class="user_info">            <span class="user_name">Tamara Rager</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="19">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/b.png"></span>        <div class="user_info">            <span class="user_name">Théophane</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="21">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/c.png"></span>        <div class="user_info">            <span class="user_name">Tobias Wagenschwanz</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="20">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/e.png"></span>        <div class="user_info">            <span class="user_name">Tom Brackey</span>        </div>    </a></li><li>    <a href="javascript:void(0)" rel="14">        <span class="user_img phone_img"><img src="https://statics.spyzie.com/images/avatar/d.png"></span>        <div class="user_info">            <span class="user_name">Yohanes Nugroho</span>        </div>    </a></li>                            <template v-for="list in data">
                                <Contacts_list v-for="item in list" v-bind:item="item"></Contacts_list>
                            </template>
                        </ul>

                        <div class="loading hide">
                            <div class="spinner2"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="detail_box contacts_detail list_detail">
                    <div class="btn_back"><a href="#" class="btn-full-radius5-black list_click_back"><i class="si si-arrow_left"></i></a></div>
                    <div class="box_top contacts_header">
                        <span class="user_img phone_img phone_img_lg"><img v-bind:src="data.avatar"></span>
                        <strong class="user_name" v-html="data.name"></strong>
                        <strong class="company_name" v-bind:title="data.notes" v-html="data.notes"></strong>
                    </div>
                    <div class="box_cont contacts_cont">
                        <div class="full-height">
                            <template v-if="data.number && data.number.length>0">
                                <dl>
                                    <dt>Phone:</dt>
                                    <template v-for="item in data.number">
                                        <dd>
                                            <small v-html="item.type"></small>
                                            <strong v-html="item.value"></strong>
                                        </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.email.length!=0">
                                <dl>
                                    <dt>Mail:</dt>
                                    <template v-for="item in data.email">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.value"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.website.length!=0">
                                <dl>
                                    <dt>Url:</dt>
                                    <template v-for="item in data.website">
                                    <dd>
                                        <strong v-html="item.value"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.address.length!=0">
                                <dl>
                                    <dt>Address:</dt>
                                    <template v-for="item in data.address">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.formattedAddress"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.events.length!=0">
                                <dl>
                                    <dt>Events:</dt>
                                    <template v-for="item in data.events">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.value"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.group.length!=0">
                                <dl>
                                    <dt>Group:</dt>
                                    <template v-for="item in data.group">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.value"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.im.length!=0">
                                <dl>
                                    <dt>Im:</dt>
                                    <template v-for="item in data.im">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.value"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                            <template v-if="data.number && data.organize.length!=0">
                                <dl>
                                    <dt>Organization:</dt>
                                    <template v-for="item in data.organize">
                                    <dd>
                                        <small v-html="item.type"></small>
                                        <strong v-html="item.title"></strong>
                                        <strong v-html="item.company"></strong>
                                    </dd>
                                    </template>
                                </dl>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
                </div>
        <!--end info list-->
    </div>
</div>





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
                if(name == 'contacts_index') {
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
                var link = '/livedemo/contacts.html', date = '', search = 'search', param = {}, _param = [];
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

