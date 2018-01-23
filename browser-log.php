
    <!DOCTYPE html>
    <html lang="en-US" >
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
              content="width=device-width,user-scalable=0,initial-scale=1,maximum-scale=1, minimum-scale=1">
        <meta name="robots" content="noindex,nofollow"/>
        <link rel="shortcut icon" href="https://statics.spyzie.com/css/logos/favicon.ico" mce_href="https://statics.spyzie.com/css/logos/logo_i.png" type="image/x-icon"/>
        <title>Spyzie            - Browser History - Live Demo</title>
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
<link href="https://statics.spyzie.com/css/table.css?v=1512984769" rel="stylesheet">
<link href="/assets/553657ca/css/daterangepicker.min.css?v=1491481924" rel="stylesheet">
<link href="/assets/553657ca/css/daterangepicker-kv.min.css?v=1489138217" rel="stylesheet">
<link href="/assets/eafe357d/css/kv-widgets.min.css?v=1489138217" rel="stylesheet">
<script src="https://statics.spyzie.com/js/lib/jquery-2.1.4.bootstrap.min.js?v=1516603721"></script>
<script src="/assets/553657ca/js/moment.min.js?v=1489138217"></script>
<script type="text/javascript">var daterangepicker_e7b86215 = {"locale":{"format":"YYYY-MM-DD","applyLabel":"Apply","cancelLabel":"Cancel","fromLabel":"From","toLabel":"To","weekLabel":"W","customRangeLabel":"Custom Range","daysOfWeek":moment.weekdaysMin(),"monthNames":moment.monthsShort(),"firstDay":moment.localeData()._week.dow},"opens":"left","minDate":"1970-01-01","maxDate":moment(),"startDate":"1970-01-01","endDate":"2018-01-23","autoUpdateInput":false,"ranges":{"Today":[moment().startOf('day'),moment()],"Yesterday":[moment().startOf('day').subtract(1,'days'),moment().endOf('day').subtract(1,'days')],"Last 7 Days":[moment().startOf('day').subtract(6, 'days'),moment()],"Last 30 Days":[moment().startOf('day').subtract(29, 'days'),moment()],"This Month":[moment().startOf('month'),moment().endOf('month')],"Last Month":[moment().subtract(1, 'month').startOf('month'),moment().subtract(1, 'month').endOf('month')],"All Time":[1970-01-01,moment()]}};
</script>
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="ZpIpqgKA5Tl7C2B5oPaBGLnAPQMM3pVzu34AOaErRg4Ow3jHSMazUhQzEjvUs7Zi9p8MUmmV8iz9B0N35H08ZA==">
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
                                                                                                                                                <li id="browser_log_index" class="curr">
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
                </ul>                            <h1 class="column">Browser History</h1>
                    </div>

        
    <div class="commonAlert">
            </div>


<div id="browser-log" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000"><div class="panel panel-default">
    <div class="panel-body">
        <div class="panel-header panel_operation clearfix">
            <div class="screen">
                <form action="/livedemo/browser-log.html" method="get"><div id="w0-container" class="calendar">    <div class="btn btn-default">
        <i class="si si-calendar"></i><span>1970-01-01 - 2018-01-23</span>
        <input type="hidden" id="w0" class="form-control" name="date_range" value="1970-01-01 - 2018-01-23" data-krajee-daterangepicker="daterangepicker_e7b86215">
    </div></div><div class="search"><div class="box"><input type="text" name="search" value="" placeholder="Search"><button type="submit"><i class="si si-search"></i></button></div></div></form>            </div>
        </div>
        <!--info list-->
        <div id="w1" class="tableStyle tableStyle_padding_lg mobileTable_line"><table id="infinitescroll" class="table table-hover table-striped"><thead>
<tr class="hidden-xs hidden-sm"><th><a href="/livedemo/browser-log.html?sort=url" data-sorting="square" data-sort="url">URL</a></th><th><a href="/livedemo/browser-log.html?sort=title" data-sorting="square" data-sort="title">Title</a></th><th><a href="/livedemo/browser-log.html?sort=visit_frequency" data-sorting="square" data-sort="visit_frequency">Visit frequency</a></th><th><a class="desc" href="/livedemo/browser-log.html?sort=last_visit_time" data-sorting="square" data-sort="last_visit_time">Last visit time</a></th><th><a href="/livedemo/browser-log.html?sort=bookmark" data-sorting="square" data-sort="bookmark">Bookmark</a></th></tr>
</thead>
<tbody>
<tr data-key=""><td><a href="https://accounts.google.com/SignOutOptions?service=googleplay&amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube" target="view_frame"><span title="https://accounts.google.com/SignOutOptions?service=googleplay&amp;amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube">https://accounts.google.com/SignOutOptio...</span></a></td><td><span title="Sign in - Google Accounts">Sign in - Google Accounts</span></td><td>1 time</td><td>Apr 13, 2017, 9:45:40 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://play.google.com/store" target="view_frame"><span title="https://play.google.com/store">https://play.google.com/store</span></a></td><td><span title="YouTube – Android Apps on Google Play">YouTube – Android Apps on Goog...</span></td><td>1 time</td><td>Apr 13, 2017, 9:45:10 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://accounts.google.com/ServiceLogin?service=googleplay&amp;passive=0&amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube#password" target="view_frame"><span title="https://accounts.google.com/ServiceLogin?service=googleplay&amp;amp;passive=0&amp;amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube#password">https://accounts.google.com/ServiceLogin...</span></a></td><td><span title="Sign in - Google Accounts">Sign in - Google Accounts</span></td><td>1 time</td><td>Apr 13, 2017, 9:44:04 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://accounts.google.com/ServiceLogin?service=googleplay&amp;passive=0&amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube" target="view_frame"><span title="https://accounts.google.com/ServiceLogin?service=googleplay&amp;amp;passive=0&amp;amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube">https://accounts.google.com/ServiceLogin...</span></a></td><td><span title="Sign in - Google Accounts">Sign in - Google Accounts</span></td><td>1 time</td><td>Apr 13, 2017, 9:44:04 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://accounts.google.com/signin/challenge/sl/password#password" target="view_frame"><span title="https://accounts.google.com/signin/challenge/sl/password#password">https://accounts.google.com/signin/chall...</span></a></td><td><span title="Google Play">Google Play</span></td><td>1 time</td><td>Apr 13, 2017, 9:44:03 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://accounts.google.com/signin/challenge/sl/password" target="view_frame"><span title="https://accounts.google.com/signin/challenge/sl/password">https://accounts.google.com/signin/chall...</span></a></td><td><span title="Web page not available">Web page not available</span></td><td>1 time</td><td>Apr 13, 2017, 9:43:40 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://accounts.google.com/ServiceLogin?service=googleplay&amp;passive=0&amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube#identifier" target="view_frame"><span title="https://accounts.google.com/ServiceLogin?service=googleplay&amp;amp;passive=0&amp;amp;continue=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.google.android.youtube%26authuser%3D0%26rdid%3Dcom.google.android.youtube#identifier">https://accounts.google.com/ServiceLogin...</span></a></td><td><span title="Google Play">Google Play</span></td><td>1 time</td><td>Apr 13, 2017, 9:42:44 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://my.spyzie.com/install.apk" target="view_frame"><span title="https://my.spyzie.com/install.apk">https://my.spyzie.com/install.apk</span></a></td><td><span title="Web page not available">Web page not available</span></td><td>2 times</td><td>Apr 13, 2017, 9:41:26 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://www.youtube.com/watch?v=UEYp1RTvllM" target="view_frame"><span title="https://www.youtube.com/watch?v=UEYp1RTvllM">https://www.youtube.com/watch?v=UEYp1RTv...</span></a></td><td><span title="Overwatch Gameplay Trailer #2 - YouTube">Overwatch Gameplay Trailer #2...</span></td><td>1 time</td><td>Apr 10, 2017, 7:12:50 AM</td><td>not added</td></tr>
<tr data-key=""><td><a href="https://m.youtube.com/watch?v=UEYp1RTvllM" target="view_frame"><span title="https://m.youtube.com/watch?v=UEYp1RTvllM">https://m.youtube.com/watch?v=UEYp1RTvll...</span></a></td><td><span title="YouTube">YouTube</span></td><td>1 time</td><td>Apr 10, 2017, 7:12:49 AM</td><td>not added</td></tr>
</tbody></table></div>        <!--end info list-->
    </div>
</div>


<div class="paging clearfix hidden-xs hidden-sm">
    <div class="showing_entries">
        Showing 1 to 10 of 29 entries    </div>
    <div class="navigation">
        <div class="show_entries btn dropup">
            <div class="dropdown-toggle" data-toggle="dropdown"><span>
                    Show 10 entries                </span>
                <i class="si si-angle_down"></i>
            </div>

            <ul class="dropdown-menu"><li><a href="/livedemo/browser-log.html?page=1">10</a></li>
<li><a href="/livedemo/browser-log.html?page=1&amp;per-page=25">25</a></li>
<li><a href="/livedemo/browser-log.html?page=1&amp;per-page=50">50</a></li>
<li><a href="/livedemo/browser-log.html?page=1&amp;per-page=100">100</a></li></ul>        </div>

        <ul class="pagination"><li class="prev disabled"><span aria-label="Previous"><i class="si si-arrow_border_left"></i></span></li>
<li class="active"><a href="/livedemo/browser-log.html?page=1" data-page="0">1</a></li>
<li><a href="/livedemo/browser-log.html?page=2" data-page="1">2</a></li>
<li><a href="/livedemo/browser-log.html?page=3" data-page="2">3</a></li>
<li><span class="span_input"><span><input type="text" id="page-input" class="form-control input-sm" name="page" value="1" size="1"></span> <span> / 3</span></span></li>
<li class="next"><a href="/livedemo/browser-log.html?page=2" aria-label="Next" data-page="1"><i class="si si-arrow_border_right"></i></a></li></ul>    </div>
</div>
</div>
<div id="infinitescroll_navigation"><a href="/livedemo/browser-log.html?page=2"></a></div><div class="loading"></div>



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

    <script src="/assets/553657ca/js/daterangepicker.min.js?v=1491481924"></script>
<script src="/assets/eafe357d/js/kv-widgets.min.js?v=1489138217"></script>
<script src="/assets/a66ef2de/yii.js?v=1512984771"></script>
<script src="/assets/a66ef2de/yii.gridView.js?v=1512984771"></script>
<script src="/assets/ce936a5a/jquery.pjax.js?v=1489138216"></script>
<script src="https://statics.spyzie.com/js/lib/jquery.infinitescroll.js?v=1512984771"></script>
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
                if(name == 'browser_log_index') {
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
jQuery("#w0").off('change.kvdrp').on('change.kvdrp', function() {
    var drp = jQuery("#w0-container").data('daterangepicker'), now;
    if ($(this).val() || !drp) {
        return;
    }
    now = moment().format('YYYY-MM-DD') || '';
    drp.setStartDate(now);
    drp.setEndDate(now);
    
});
if (jQuery('#w0').data('daterangepicker')) { jQuery('#w0').daterangepicker('destroy'); }
jQuery("#w0-container").daterangepicker(daterangepicker_e7b86215,         function(start,end){
            var link = '/livedemo/browser-log.html', search = $('input[name=search]').length>0 ? $('input[name=search]').val() : '', param = [];
            var date = start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD');
            if (date == '1970-01-01 - ' + moment().format('YYYY-MM-DD')) {
                param = $.extend(param, {'date' : ''});
            } else {
                param = $.extend(param, {'date' : date});
            }
            param = $.extend(param, {'search' : encodeURIComponent(search)});
            
            _param = [];
            for(key in param){
                if(param[key]!=''){_param.push(key + '=' + param[key]);} 
            }
            
            param = _param.join('&');
            window.location.href = param=='' ? link : link + '?' + param;
        });

            $('form').submit(function (e) {
                e.preventDefault();
                var link = '/livedemo/browser-log.html', date = '', search = 'search', param = {}, _param = [];
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
jQuery('#w1').yiiGridView({"filterUrl":"\/livedemo\/browser-log.html","filterSelector":"#w1-filters input, #w1-filters select"});
            function goPage() {
                goPage = $("#page-input").val();
                pageLink = "/livedemo/browser-log.html?page=1";
                if (goPage >= 1 && goPage <= 3) {
                    pageLink = pageLink.replace("page=1", "page="+goPage);
                    window.location.href=pageLink;
                } else {
                    $("#page-input").focus();
                }
            }
            $("#page-input").blur(function() {
                goPage();
            });
            $("#page-input").keydown(function(event) {
                if (event.keyCode == 13) {
                    goPage();
                }
            });
jQuery(document).pjax("#browser-log a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#browser-log"});
jQuery(document).on("submit", "#browser-log form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#browser-log"});});
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {        $('#infinitescroll tbody').infinitescroll({
                loading: {
                    msgText: '<div class="spinner2"><span></span></div>',
                    img: '',
                    finishedMsg: '<span>no more</span>',
                    selector: '.loading' //loading
                },
                navSelector: "#infinitescroll_navigation",
                nextSelector: "#infinitescroll_navigation a",
                itemSelector: "#infinitescroll tbody tr",
                dataType: "html",
                maxPage: '3',
                debug: '',
                animate: '',
                extraScrollPx: '150',
                bufferPx: '40',
                errorCallback: function () {

                },
                path: function (index) {
                    var url = '/livedemo/browser-log.html?page=2';
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

