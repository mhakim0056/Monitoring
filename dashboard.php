
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Dashboard - Live Demo</title>
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
    <meta name="csrf-token" content="ThyUJqkqteD9M1pwV5YoIP0muDwQNSlHwTawEt6pvBkmTcVL42zji5ILKDIj0x9asnmJbXV-ThiHT_Ncm__Gcw==">
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
                                            Be updated:                                            Jan 23, 2018 01:16                                        </i>
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
                                                                                                                                            <li id="site_index" class="curr">
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
                </ul>                            <h1 class="column">Dashboard</h1>
                    </div>

        
    <div class="commonAlert">
            </div>



    <!--alert mobole download app-->
    <div id="alert_mobileDownApp" hidden>
        <div class="alert alert-mobileDownApp fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <div class="txt">Spyzie app available now!</div>
            <a id="alert_app_donwload" href="#" class="btn">Download</a>
        </div>
    </div>
    <!--pop-up windows-->
    <div class="pop_panel">
        <span class="close" onClick="$(this).parent().removeClass('show');"></span>
        <div class="panelBox pro_ad">
            <div class="top">
                View important target device monitoring anytime                <strong>Free to use</strong>
            </div>
            <div class="cont">
                <div class="logo logo_spyzie_i"></div>
                <span>Spyzie Control Panel</span>
                <div class="btnBox">
                                            <a href="https://itunes.apple.com/us/app/spyzie/id1225512733?mt=8" target="_blank"
                           onclick="javascript:ga('send', {hitType: 'event', eventCategory: 'Live Demo Popup',eventAction: 'Click',eventLabel: 'iOS App Link'});">
                            <img src="https://statics.spyzie.com/images/btn_appstore.png"/>
                        </a>
                                        <a href="http://www.spapp.vip/control-panel.html" target="_blank"
                       onclick="javascript:ga('send', {hitType: 'event', eventCategory: 'Live Demo Popup', eventAction: 'Click', eventLabel: 'Control Panel Link'});">
                        <img src="https://statics.spyzie.com/images/control-panel.png"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end pop-up windows-->
    <script type="text/javascript">
        $(document).ready(function () {
            
            if (document.cookie.indexOf('disable_pro_ad') == -1) {
                setTimeout(function () {
                    $(".pop_panel").addClass("show");
                    var date = new Date();
                    date.setTime(date.getTime() + (1000 * 60 * 60 * 24 * 7));
                    document.cookie = 'disable_pro_ad=1;expires=' + date.toGMTString();
                }, 1000 * 60);
                setTimeout(function () {
                    $(".pop_panel").removeClass("show");
                }, 1000 * 60 * 2);
            }
        })
    </script>
<div id="dashboard" class="main_body" v-cloak>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default" >
                <div class="panel-header panel-header-noborder">
                    <div class="panel-options">Current: <strong class="color_red current_status">Active</strong></div>
                    <h3 class="title">Device Information</h3>
                </div>
                <div class="panel-body">
                    <div class="row device_info">
                        <div class="col-lg-4 col-sm-6"><i class="si si-phone"></i> <span>Device Model:</span>  <strong>Galaxy S7</strong></div>
                        <div class="col-lg-3 col-sm-6"><i class="si si-battery"></i> <span>Battery Level:</span>  <strong id="batterylevel">100%</strong></div>
                                                    <div class="col-lg-2 col-sm-6"><i class="si si-location"></i>  <strong>Dayton Valley Golf Course</strong></div>
                                                <div class="col-lg-12 col-sm-6"><strong class="btn_sync_tip">Synched 3 minute(s) ago</strong>&nbsp;<a href="javascript:void(0)" class="btn_sync" v-on:click.stop="$('.btn_sync').click()"><span><i class="si si-sync"></i></span></a></div>
                                            </div>
                </div>
            </div>
                        <div class="visible-xs-block visible-sm-block">
    <div class="panel panel-default">
        <div class="panel-header">
            <h3 class="title">You Can Monitor:</h3>
        </div>
        <div class="panel-body">
            <div class="get_control">
                                <div class="list">
                    <a href="/livedemo/call-log.html">
                        <i class="si si-call"><span class="badge">5</span></i>
                        <span class="name">Calls</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/sms.html">
                        <i class="si si-message"><span class="badge">10</span></i>
                        <span class="name">Messages</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/location.html">
                        <i class="si si-location_mark"><span class="badge">3</span></i>
                        <span class="name">Locations</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/social-apps/facebook.html">
                        <i class="si si-facebook"><span class="badge">15</span></i>
                        <span class="name">Facebook</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/social-apps/snapchat.html">
                        <i class="si si-snapchat"><span class="badge">20</span></i>
                        <span class="name">Snapchat</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/whats-app.html">
                        <i class="si si-whatsapp"><span class="badge">5</span></i>
                        <span class="name">WhatsApp</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/browser-log.html">
                        <i class="si si-history"><span class="badge">27</span></i>
                        <span class="name">Browser History</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/contacts.html">
                        <i class="si si-contacts"><span class="badge">1</span></i>
                        <span class="name">Contacts</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/images.html">
                        <i class="si si-photos"><span class="badge">3</span></i>
                        <span class="name">Photos</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/videos.html">
                        <i class="si si-video"><span class="badge">1</span></i>
                        <span class="name">Video Preview</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/screenshots.html">
                        <i class="si si-screenshot"><span class="badge">2</span></i>
                        <span class="name">Capture Screenshots</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/key-logger.html">
                        <i class="si si-keylogger"><span class="badge">54</span></i>
                        <span class="name">Keylogger</span>
                    </a>
                </div>
                                <div class="list">
                    <a href="/livedemo/apps.html">
                        <i class="si si-appstore"><span class="badge">3</span></i>
                        <span class="name">Applications</span>
                    </a>
                </div>
                            </div>
        </div>
    </div>
</div>
                        <div class="panel panel-default">
    <div class="panel-header">
                    <div class="panel-options"><a href="/livedemo/call-log.html"
                                          class="btn-arrow">More</a></div>
                <h3 class="title">New Call</h3>
    </div>
    <div class="panel-body">
        <div class="stacked_bars_panel dash_call">
                <div v-if="new_call_data.length == 0" class="no_detected">
                    No calls detected                </div>
                <div v-else>
                    <div v-for="item in new_call_data">
                        <div class="user_img">
                            <div class="phone_img">
                                <img :src="item.avatar">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="time_info">
                                <span class="time">{{ item.log_time }}</span>
                                <span class="lasts">{{ item.duration }}</span>
                            </div>
                            <div class="user_info">
                                <div class="user_name">{{ item.name }}</div>
                                <span class="phone_num">{{ item.number }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
            <div class="panel panel-default">
    <div class="panel-header">
                    <div class="panel-options"><a href="/livedemo/sms.html" class="btn-arrow">More</a></div>
                <h3 class="title">New Message</h3>
    </div>
    <div class="panel-body">
        <div class="stacked_bars_panel dash_mess">
            <div v-if="new_message_data.length == 0" class="no_detected">
                No messages detected            </div>
            <div v-else>
                <div v-for="item in new_message_data">
                    <div class="user_img">
                        <div class="phone_img">
                            <img :src="item.avatar">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="time_info">
                            <span class="time">{{ item.last_msg_time }}</span>
                        </div>
                        <div class="user_info">
                            <div class="txt">{{ item.last_msg }}</div>
                            <span class="phone_num">{{ item.name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="col-md-6 pull-right mobile_none">
            <div class="panel panel-default">
                <div class="panel-header">
                                            <div class="panel-options"><a href="/livedemo/location.html" class="btn-arrow">More</a></div>
                                        <h3 class="title">Last Known Location</h3>
                </div>
                <div class="panel-body">
                    <div class="panel-loading loading-results das_map">
                        <div class="inline">
                            <div class="table-cell">
                                <div class="loading">
                                    <div class="spinner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="das_map panel-box hide" id="location"></div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-6">
            <div class="panel panel-default">
                
<div class="panel-header">
            <div class="panel-options"><a href="/livedemo/call-log.html" class="btn-arrow">More</a></div>
        <h3 class="title">Recent 5 most calling contacts <small></small></h3>
</div>
<div class="panel-body">
    <div v-if="top_call.length == 0">
                    <div class="no-results">
                <div class="inline">
                    <span>
                        <img src="https://statics.spyzie.com/images/no_results.png" />
                        <strong>No results found</strong>
                    </span>
                </div>
            </div>    </div>
    <div v-else class="stacked_bars_panel">
            <div class="list" v-for="item in top_call">
                <div class="user_img"><div class="phone_img"><img :src="item.avatar"></div></div>
                <div class="cont">
                    <div class="user_info">
                        <span class="user_name">{{ item.name }}</span>
                            <span class="phone_num">{{ item.number }}</span>
                    </div>
                    <div class="progress stacked_bars">
                        <div class="progress-bar" role="progressbar" :aria-valuenow="item.percent" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">{{ item.percent }}% </span>
                        </div>
                        <span class="num" :count="item.count">0</span>
                    </div>
                </div>
            </div>
    </div>
</div>
            </div>
            <div class="panel panel-default">
                
<div class="panel-header">
            <div class="panel-options"><a href="/livedemo/sms.html" class="btn-arrow">More</a></div>
        <h3 class="title">Recent 5 most messaging contacts <small></small></h3>
</div>
<div class="panel-body">
    <div v-if="top_message.length == 0">
                    <div class="no-results">
                <div class="inline">
                    <span>
                        <img src="https://statics.spyzie.com/images/no_results.png" />
                        <strong>No results found</strong>
                    </span>
                </div>
            </div>    </div>
    <div v-else class="stacked_bars_panel">
            <div class="list" v-for="item in top_message">
                <div class="user_img"><div class="phone_img"><img :src="item.avatar"></div></div>
                <div class="cont">
                    <div class="user_info">
                        <span class="user_name">{{ item.name }}</span>
                            <span class="phone_num">{{ item.number }}</span>
                    </div>
                    <div class="progress stacked_bars">
                        <div class="progress-bar" role="progressbar" :aria-valuenow="item.percent" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">{{ item.percent }}% </span>
                        </div>
                        <span class="num" :count="item.count">0</span>
                    </div>
                </div>
            </div>
    </div>
</div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-header">
    <div class="panel-options"></div>
    <h3 class="title">Phone Activities        <small>(Today)</small>
    </h3>
</div>
<div class="panel-body text-center">
    <div class="panel-loading loading-results das_chart">
        <div class="inline">
            <div class="table-cell">
                <div class="loading">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="das_chart panel-box hide" id="activities">            <div class="no-results">
                <div class="inline">
                    <span>
                        <img src="https://statics.spyzie.com/images/no_results.png" />
                        <strong>No results found</strong>
                    </span>
                </div>
            </div></div>
</div>            </div>
        </div>

    </div>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdyIeV7bNOJteKJ_tw85mWM9tfnZln9sU">
</script>
<div class="modal fade icon-switch-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><span class="icon-switch-title">Hide Spyzie iCon on monitor device</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center"><small>
                    Spyzie is designed for use by those who have the legal right to monitor the device on which it is installed. Please read important legal disclosures and accept the License Agreement to proceed.                    </small></h4>
                <p class="i-checks">
                    <label>
                        <input type="checkbox" name="agree" autocomplete="off">
                        <small>I understand and accept Spyzie's License Agreement</small>
                    </label>
                </p>
                <p class="text-danger hide">Please read and agree to our Terms of Use.</p>
                <div class="text-center setting_btn">
                    <input type="hidden" id="icon_enable">
                    <a href="javascript:void(0);" class="btn btn-full icon-switch">Hide</a>
                    <a href="javascript:void(0);" class="btn btn-border come-back" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
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
    var api_url = 'https://data-api.spyzie.com/v1/data/dashboard?s=e4BTmnFuys8ab6vLuiMyGBY4onGm3g8cL1j68NgSSXk&lang=en-US&ip=125.163.216.99&from_app=0&timestamp=1516670351228&vc=8f16c93c33f8d2a539b59c3f544e8920&key=DF57C5922C29CBA3D9F4B0234E5A8A55';
    var ws_global_switch = true;
    var dashboard = true;

    var ws_global_switch = true,
        enable = 'Show',
        disable = 'Hide',
        icon_switch_url = '/livedemo/site/icon-switch.html';

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
                if(name == 'site_index') {
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
}</script>                <script type="text/javascript">
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

