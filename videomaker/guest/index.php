<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST['logout'])) { unset($_SESSION['login']); }

// (C) REDIRECT TO PREVIEW PAGE IF LOGGED IN
if (isset($_SESSION['login'])) {
  header("Location: ../");
  exit();
}
?>
<!DOCTYPE html>
<!-- Made By Yanny And Recreated by Joseph The Animator.-->

<title>Videomaker On OurAnimate</title>
<meta name="description" content="Wrapper Duked is a GoAnimate Private Server remake revived by Yanny GoAnimate 57!">
<meta property="og:type" content="website">
<meta property="og:title" content="Wrapper Online" />
<meta property="og:description" content="Wrapper Duked is a GoAnimate Private Server remake revived by Yanny GoAnimate 57!" />
<meta property="og:url" content="https://wrapper.online/" />
<meta property="og:image:secure_url" content="https://wrapperonlineassets.ga/favicon.ico" /> 
<meta name="theme-color" content="#FF0080">
<link href="https://josephcrosmanplays532.github.io/fonts/2/font2014.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/bootstrap/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/bootstrap/bootstrapSwitch.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/style.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/site.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/static/477/go/css/overlay.css" rel="stylesheet" type="text/css"/>

<link href="https://josephcrosmanplays532.github.io/static/477/go/css/upsell_modals.css" rel="stylesheet" type="text/css"/>
<link href="https://josephcrosmanplays532.github.io/goanimate%20files/videomaker.css" rel="stylesheet" type="text/css"/>


<script src="https://josephcrosmanplays532.github.io/goanimate%20files/jquery-1.8.3.min.js.download"></script>

<script src="https://josephcrosmanplays532.github.io/goanimate%20files/bootstrap.min.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/bootstrap-modalmanager.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/bootstrap-modal.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/bootstrapSwitch.js.download"></script>


<script src="https://josephcrosmanplays532.github.io/goanimate%20files/go2.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/jquery.swfobject.min.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/jquery.blockUI.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/jquery.scrollTo.min.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/app.js.download"></script>

<script src="https://josephcrosmanplays532.github.io/goanimate%20files/cookie.js.download"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/Gettext.js.download"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/goanimate%20files/goserver_js-en_US.json"></script>
<script type="text/javascript" src="../../js/goanimate/videomaker/script1.js"></script>
<script src="https://josephcrosmanplays532.github.io/goanimate%20files/jquery.flexslider.min.js.download"></script>

<!-- Google Analytics -->
<script type="text/javascript" src="../../js/goanimate/videomaker/script2.js"></script>

<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/goanimate%20files/google_service.js.download">
</script>
<script type="text/javascript">
GS_googleAddAdSenseService("ca-pub-9090384317741239");
GS_googleEnableAllServices();
</script><script src="https://josephcrosmanplays532.github.io/goanimate%20files/google_ads.js.download"></script>
<script type="text/javascript">
GA_googleAddAttr("is_login", "no");
GA_googleAddAttr("is_plus", "no");
GA_googleAddAttr("is_creator", "no");
</script>
<script type="text/javascript">
GA_googleAddSlot("ca-pub-9090384317741239", "GoAnimate_Footer_ROS_Bottom_960x284");
</script>
<script type="text/javascript">
GA_googleFetchAds();
</script>
<!-- GoAnimate_Footer_ROS_Bottom_960x284 -->

<link href="https://plus.google.com/+goanimate" rel="publisher">

<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}
.fb_invisible{display:none}
.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
.fb_reset > div{overflow:hidden}
.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
.fb_dialog_content{background:#fff;color:#333}
.fb_dialog_close_icon{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px;top:8px\9;right:7px\9}
.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
.fb_dialog_close_icon:hover{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_close_icon:active{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_loader{background-color:#f2f2f2;border:1px solid #606060;font-size:24px;padding:20px}
.fb_dialog_top_left,
.fb_dialog_top_right,
.fb_dialog_bottom_left,
.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
.fb_dialog_top_left{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}
.fb_dialog_top_right{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}
.fb_dialog_bottom_left{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}
.fb_dialog_bottom_right{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}
.fb_dialog_vert_left,
.fb_dialog_vert_right,
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
.fb_dialog_vert_left,
.fb_dialog_vert_right{width:10px;height:100%}
.fb_dialog_vert_left{margin-left:-10px}
.fb_dialog_vert_right{right:0;margin-right:-10px}
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{width:100%;height:10px}
.fb_dialog_horiz_top{margin-top:-10px}
.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
.fb_dialog_iframe{line-height:0}
.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3b5998;color:#fff;font-size:14px;font-weight:bold;margin:0}
.fb_dialog_content .dialog_title > span{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif)
no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}
body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}
.fb_dialog.fb_dialog_mobile.loading{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif)
white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}
#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}
#fb-root #fb_dialog_ipad_overlay.hidden{display:none}
.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%
}
.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6),
color-stop(0.5, #355492), to(#2A4887));border:1px solid #29447e;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset,
rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
.fb_dialog_content .dialog_content{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
.fb_dialog_content .dialog_footer{background:#f2f2f2;border:1px solid #555;border-top-color:#ccc;height:40px}
#fb_dialog_loader_close{float:left}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
.fb_iframe_widget{display:inline-block;position:relative}
.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}
.fb_iframe_widget iframe{position:absolute}
.fb_iframe_widget_lift{z-index:1}
.fb_hide_iframes iframe{position:relative;left:-10000px}
.fb_iframe_widget_loader{position:relative;display:inline-block}
.fb_iframe_widget_fluid{display:inline}
.fb_iframe_widget_fluid span{width:100%}
.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
.fb_iframe_widget_loader .FB_Loader{background:url(http://web.archive.org/web/20140228083745if_/http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_connect_bar_container div,
.fb_connect_bar_container span,
.fb_connect_bar_container a,
.fb_connect_bar_container img,
.fb_connect_bar_container strong{background:none;border-spacing:0;border:0;direction:ltr;font-style:normal;font-variant:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal;vertical-align:baseline}
.fb_connect_bar_container{position:fixed;left:0 !important;right:0 !important;height:42px !important;padding:0 25px !important;margin:0 !important;vertical-align:middle !important;border-bottom:1px solid #333 !important;background:#3b5998 !important;z-index:99999999 !important;overflow:hidden !important}
.fb_connect_bar_container_ie6{position:absolute;top:expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")}
.fb_connect_bar{position:relative;margin:auto;height:100%;width:100%;padding:6px 0 0 0 !important;background:none;color:#fff !important;font-family:"lucida grande", tahoma, verdana, arial, sans-serif !important;font-size:13px !important;font-style:normal !important;font-variant:normal !important;font-weight:normal !important;letter-spacing:normal !important;line-height:1 !important;text-decoration:none !important;text-indent:0 !important;text-shadow:none !important;text-transform:none !important;white-space:normal !important;word-spacing:normal !important}
.fb_connect_bar a:hover{color:#fff}
.fb_connect_bar .fb_profile img{height:30px;width:30px;vertical-align:middle;margin:0 6px 5px 0}
.fb_connect_bar div a,
.fb_connect_bar span,
.fb_connect_bar span a{color:#bac6da;font-size:11px;text-decoration:none}
.fb_connect_bar .fb_buttons{float:right;margin-top:7px}
.fbpluginrecommendationsbarleft,
.fbpluginrecommendationsbarright{position:fixed !important;bottom:0;z-index:999}
.fbpluginrecommendationsbarleft{left:10px}
.fbpluginrecommendationsbarright{right:10px}</style></head>
<body class="en_US" data-gr-c-s-loaded="true">
<div id="fb-root" class=" fb_reset"><script async="" src="/goanimate-files/all.js.download"></script><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/xd_arbiter.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/xd_arbiter(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f38184cf9bfce8e" frameborder="0" allowtransparency="true" scrolling="no" src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/ping.html" style="display: none;"></iframe></div></div></div>
<script type="text/javascript" src="../../js/goanimate/videomaker/script3.js"></script>

<script type="text/javascript" src="../../js/goanimate/videomaker/script4.js"></script>

<script type="text/javascript">
		jQuery.extend(CCStandaloneBannerAdUI, {"actionshopSWF":"http:\/\/web.archive.org\/web\/20140228083745\/http:\/\/lightspeed.goanimate.com\/animation\/870\/actionshop.swf","apiserver":"http:\/\/web.archive.org\/web\/20140228083745\/http:\/\/goanimate.com\/","clientThemePath":"http:\/\/web.archive.org\/web\/20140228083745\/http:\/\/lightspeed.goanimate.com\/static\/466\/<client_theme>","userId":""});
</script>

<div class="page-container">

<!-- HEADER -->
<div class="site-header">
	<div class="site-header-bg"></div>
	<div class="container site-header-inside">
		<a class="site-logo" href="../dashboard/videos" title="Wrapper Online">
			<img alt="Make a Video Online with GoAnimate.com" src="https://app-ouranimate.herokuapp.com/html/logo.png">
		</a>

		<div class="pull-right">
			<ul id="top-nav" class="top-nav">
                                <li>
				<a href="/signup">Sign Up</a>
				</li>
				<li class="divider"></li>
				<li>
				<a href="/login?returnTo=/videomaker/guest">Login</a>
				</li>
				<li class="divider"></li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="http://web.archive.org/web/20140421234546/http://goanimate.com/videos" data-toggle="dropdown">Explore <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/video-maker-tips">Blog</a></li>
						<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/videos">Videos</a></li>
					</ul>
				</li>
				<li class="divider"></li>

				<li>
					<a href="/cc_browser">Create &amp; Browse Characters</a>
				</li>
			</ul>

			<div class="top-nav-vm-btn">
				
				<a class="btn btn-orange pull-left" href="/videomaker">Make a Video</a>
			</div>
		</div>

	</div>
</div>

<!-- END OF HEADER -->

 <div class="vm-tutorial">
            <div class="container">
                <div class="tutorial-video" style="display:none;">
                    <div id="wistia_9z4fah3lag" class="wistia_embed wistia_embed_initialized" style="width:860px;height:484px;">
                        <div id="wistia_chrome_28" class="w-chrome" style="display: inline-block; height: 100%; margin: 0px; padding: 0px; position: relative; vertical-align: top; width: 100%; zoom: 1; outline: none; overflow: hidden; box-sizing: content-box;">
                            <div id="wistia_grid_48_wrapper" style="display: block;">
                                <div id="wistia_grid_48_above"></div><div id="wistia_grid_48_main"><div id="wistia_grid_48_behind"></div><div id="wistia_grid_48_center"></div><div id="wistia_grid_48_front"></div><div id="wistia_grid_48_top_inside"><div id="wistia_grid_48_top"></div></div><div id="wistia_grid_48_bottom_inside"><div id="wistia_grid_48_bottom"></div></div><div id="wistia_grid_48_left_inside"><div id="wistia_grid_48_left"></div></div><div id="wistia_grid_48_right_inside"><div id="wistia_grid_48_right"></div></div></div><div id="wistia_grid_48_below"></div>
                                <style id="wistia_49_style" type="text/css" class="wistia_injected_style">
                                    #wistia_grid_48_wrapper {
                                        -moz-box-sizing: content-box;
                                        -webkit-box-sizing: content-box;
                                        box-sizing: content-box;
                                        font-family: Arial,sans-serif;
                                        font-size: 14px;
                                        height: 100%;
                                        position: relative;
                                        text-align: left;
                                        width: 100%;
                                    }

                                        #wistia_grid_48_wrapper * {
                                            -moz-box-sizing: content-box;
                                            -webkit-box-sizing: content-box;
                                            box-sizing: content-box;
                                        }

                                    #wistia_grid_48_above {
                                        position: relative;
                                    }

                                    #wistia_grid_48_main {
                                        display: block;
                                        height: 100%;
                                        position: relative;
                                    }

                                    #wistia_grid_48_behind {
                                        height: 100%;
                                        left: 0;
                                        position: absolute;
                                        top: 0;
                                        width: 100%;
                                    }

                                    #wistia_grid_48_center {
                                        height: 100%;
                                        overflow: hidden;
                                        position: relative;
                                        width: 100%;
                                    }

                                    #wistia_grid_48_front {
                                        display: none;
                                        height: 100%;
                                        left: 0;
                                        position: absolute;
                                        top: 0;
                                        width: 100%;
                                    }

                                    #wistia_grid_48_top_inside {
                                        position: absolute;
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                    }

                                    #wistia_grid_48_top {
                                        width: 100%;
                                        position: absolute;
                                        bottom: 0;
                                        left: 0;
                                    }

                                    #wistia_grid_48_bottom_inside {
                                        position: absolute;
                                        left: 0;
                                        bottom: 0;
                                        width: 100%;
                                    }

                                    #wistia_grid_48_bottom {
                                        width: 100%;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                    }

                                    #wistia_grid_48_left_inside {
                                        height: 100%;
                                        position: absolute;
                                        left: 0;
                                        top: 0;
                                    }

                                    #wistia_grid_48_left {
                                        height: 100%;
                                        position: absolute;
                                        right: 0;
                                        top: 0;
                                    }

                                    #wistia_grid_48_right_inside {
                                        height: 100%;
                                        right: 0;
                                        position: absolute;
                                        top: 0;
                                    }

                                    #wistia_grid_48_right {
                                        height: 100%;
                                        left: 0;
                                        position: absolute;
                                        top: 0;
                                    }

                                    #wistia_grid_48_below {
                                        position: relative;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <script charset="ISO-8859-1" src="https://fast.wistia.com/assets/external/E-v1.js"></script>
                    <script>
                        wistiaEmbed = Wistia.embed("9z4fah3lag");
                    </script>
                    <script charset="ISO-8859-1" src="https://fast.wistia.com/embed/medias/9z4fah3lag/metadata.js"></script>

                </div>
                <div class="vm-tutorial-trigger-container">
                    <a class="vm-tutorial-trigger" href="#" target="_blank">
                        <span class="on">Watch Tutorial</span>
                        <span class="off">Close</span>
                    </a>
                </div>
            </div>
        </div>
<div class="vm-bf-wrapper">
<div class="vm-bf" id="topbanner-bf">
	<div class="container">
		<h1>Create Animated Videos For Your YouTube Channel. Easily</h1>
		<p class="subtitle"><strong>everything you need in a range of styles!</strong></p>

		<div class="vm-bf-content">
			<p> Made by Yanny!</p>

			<div class="actions">
				<a class="btn btn-orange pull-left" href="/videomaker/full">Make a Video</a>
				
			</div>
		</div>
	</div>
</div>
	<div class="vm-bf whiteboard" id="topbanner-wb" style="display:none;">
	<div class="container">
		<h1>Create Animated Videos for Your YouTube Channel. Easily.</h1>
		<p class="subtitle"><strong>Everything you need in a wide range of styles</strong></p>

		<div class="vm-bf-content">
			<p>Banner improvement created by joseph the animator.</p>

			<div class="actions">
				<button class="btn-flat btn-flat-orange btn-flat-banner" type="button" data-action="biz-preview" data-theme="Comedy World" data-app-type="Video Maker" data-button-text="Preview Video Maker" data-callback="fullscreenStudio('/videomaker/full/custom');" title="Comedy World Video Maker">
					Make a Video <small>Start From Scratch</small>
				</button>
				<button class="btn-flat vm-bf-cc" type="button" data-action="biz-preview" data-theme="Comedy World" data-app-type="Character Creator" data-button-text="Preview Character Creator" data-callback="fullscreenStudio('/charactercreator/family');" title="Comedy World Character Creator">
				Character Creator
			        </button>
			</div>
		</div>
	</div>
</div>
<div class="vm-bf-dots-wrapper">
	<ul class="vm-bf-dots">
		<li class="dot bf on"><a href=" #"></a></li>
		<li class="dot wb"><a href=" #"></a></li>
	</ul>
</div>
</div>

<script src="../../js/goanimate/videomaker/script5_body.js"></script>

<div class="container themes-section">
	<div class="header">
		<div class="header-content">
			<h2>Select A Theme</h2>
			Select a theme based on its visual style, or use the filter to choose based on features.		</div>
		<div class="filter-dropdown-container">
			<div class="filter-dropdown dropdown">
				<a class="filter-dropdown-toggle" data-toggle="dropdown" href=" #">Filter Themes <span class="caret"></span></a>
				<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
					<li>
						<a class="filter-item" href=" dashboard/videos.html" data-filter="lipsync">
							<div class="filter-icon"><img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/filter_lip.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Lip-sync</strong></div>
								<span class="filter-desc">Characters automatically lip-sync their dialog when lines are assigned to them.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href=" #" data-filter="ext_lib">
							<div class="filter-icon"><img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/filter_library.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Extensive Library</strong></div>
								<span class="filter-desc">Collections of characters, backgrounds and props corresponding to a wide variety of locations, occupations and industries.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href=" #" data-filter="starters">
							<div class="filter-icon"><img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/filter_starter.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Scene Starters</strong></div>
								<span class="filter-desc">Works But Does Not Load Properly</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href=" #" data-filter="qvm">
							<div class="filter-icon"><img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/filter_template.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Template</strong></div>
								<span class="filter-desc">Will exist in the next update</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
					<li>
						<a class="filter-item" href=" #" data-filter="char_creator">
							<div class="filter-icon"><img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/filter_cc.png" alt=""></div>
							<div class="filter-body">
								<div class="filter-name"><strong>Character Creator</strong></div>
								<span class="filter-desc">Customize your characters!  Adapt existing characters to meet your needs or build completely from scratch.</span>
							</div>
							<div class="filter-checkbox-container">
								<span class="filter-checkbox"></span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="filter-results" id="filter-results" style="display:none">
		<b class="filter-count">0</b> matching themes based on filters:
		<ul class="filter-crumb-list"></ul>
		<a class="filter-crumb-list-clear" href=" #">Clear all</a>
	</div>

	<div class="themes clearfix" id="themes">

		<div class="theme" id="thm-business" data-tags="char_creator lipsync starters ext_lib qvm">
			<div class="theme-cell preview">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Business_Friendly.jpg" alt="Business Friendly">
				</div>
				<div class="theme-meat">
					<h3>Business Friendly</h3>
					<a class="btn btn-orange pull-left" href=" /videomaker/full/business">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/business">Character Creator</a>
				</div>
			</div>
			
		</div>

		<div class="theme" id="thm-sf" data-tags="lipsync char_creator">
			<div class="theme-cell preview">
				<div class="theme-cover launch">
					<img src="https://raw.githubusercontent.com/sageawesomegoanipicscope9865/old-goanimate-files/master/Street.png" alt="Street Fighter">
				</div>
				<div class="theme-meat">
					<h3>Street Fighter</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/sf">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/sf">Character Creator</a>
					</div>
					<div class="preview-notice">
						<a target="_blsdfasdank"></a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="theme" id="thm-botdf" data-tags="">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://raw.githubusercontent.com/sageawesomegoanipicscope9865/old-goanimate-files/master/Blood_On_The_Dance_Floor_Remastered.jpg" alt="Blood on the dance floor [Unused]">
				</div>
				<div class="theme-meat">
					<h3>Blood on the dance floor [Unused]</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/botdf">Make a Video</a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="theme" id="thm-custom" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Comedy_World.jpg" alt="Comedy World">
				</div>
				<div class="theme-meat">
					<h3>Comedy World</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/custom">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/family">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-action" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/lil_Peepz.jpg" alt="Lil&#39; Peepz">
				</div>
				<div class="theme-meat">
					<h3>Lil Peepz</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/action">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/cc2">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-politics2" data-tags="lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Election_2012.jpg" alt="White Houserz">
				</div>
				<div class="theme-meat">
					<h3>White Houserz</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/politics2">Make a Video</a>
						
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-sticklybiz" data-tags="">
			<div class="theme-cell preview">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Stickly_Business.jpg" alt="Stickly Business">
				</div>
				<div class="theme-meat">
					<h3>Stickly Business</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/sticklybiz">Make a Video</a>
						
					</div>
					<div class="preview-notice">
						<a href="" target="_blank"></a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="theme" id="thm-retro" data-tags="">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Cartoon_Classics.jpg" alt="Cartoon Classics">
				</div>
				<div class="theme-meat">
					<h3>Cartoon Classics</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/retro">Make a Video</a>
					
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-bizmodels" data-tags="">
			<div class="theme-cell preview">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Business_Models.jpg" alt="Business Models">
				</div>
				<div class="theme-meat">
					<h3>Business Models</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/bizmodels">Make a Video</a>
							
					</div>
					<div class="preview-notice">
						<a href="" target="_blank">lmao</a>
					</div>
				</div>
			</div>
			
		</div>

		<div class="theme" id="thm-anime" data-tags="char_creator lipsync qvm">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Anime.jpg" alt="Anime">
				</div>
				<div class="theme-meat">
					<h3>Anime</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/anime">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/anime">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-ninjaanime" data-tags="char_creator lipsync">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Ninja_Anime.jpg" alt="Ninja Anime">
				</div>
				<div class="theme-meat">
					<h3>Ninja Anime</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/ninjaanime">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/ninjaanime">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-spacecitizen" data-tags="lipsync char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Space_Citizens.jpg" alt="Space Citizens">
				</div>
				<div class="theme-meat">
					<h3>Space Citizens</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href="/videomaker/full/spacecitizen">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/spacecitizen">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-chibi" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Chibi_Peepz.jpg" alt="Chibi Peepz">
				</div>
				<div class="theme-meat">
					<h3>Chibi Peepz</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/chibi">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/chibi">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-ninja" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Chibi_Ninjas.jpg" alt="Chibi Ninjas">
				</div>
				<div class="theme-meat">
					<h3>Chibi Ninjas</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/ninja">Make a Video</a>
							<a class="btn btn-icon" href=" /character/browser?themeid=ninja">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-space" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Space_Peepz.jpg" alt="Space Peepz">
				</div>
				<div class="theme-meat">
					<h3>Space Peepz</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/space">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/space">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

		<div class="theme" id="thm-stick" data-tags="char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Stick_Figure.jpg" alt="Stick Figure">
				</div>
				<div class="theme-meat">
					<h3>Stick Figure</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/stick">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/stick">Character Creator</a>
					</div>
				</div>
			</div>
		</div>


		<div class="theme" id="thm-animal" data-tags="lipsync qvm char_creator">
			<div class="theme-cell">
				<div class="theme-cover launch">
					<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/Lil_Petz_World.jpg" alt="Lil&#39; Petz World">
				</div>
				<div class="theme-meat">
					<h3>Lil Petz World</h3>
					<div class="apps">
						<a class="btn btn-orange pull-left" href=" /videomaker/full/animal">Make a Video</a>
							<a class="btn btn-icon" href=" /charactercreator/animal">Character Creator</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<script src="../../js/goanimate/videomaker/script6_modal_footer.js"></script>
<script src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/video_maker.js.download"></script>

<div id="biz-preview-overlay" class="modal hide">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 class="modal-title">Preview the <span class="theme-name"></span> <span class="app-type"></span></h3>
	</div>

	<div class="modal-body text-center">
		<div>
			<br>
			<img src="https://sageawesomegoanipicscope9865.github.io/old-goanimate-files/img_previewnsave.png">
			<br><br>
		</div>

		<p>The <span class="theme-name"></span> <span class="app-type"></span> allows you to make grounded videos, ungrounded videos, rants, salutes, and mush more! <em>it even allows you to create a character witch is amazing!</em>.</p>

		<p>After you save your video or character, it will take you to the <a href="  list.html">video list.</a><br> Press Preview Video Maker, or Create a character to get your video ready to record for your youtube channel!</p>
	</div>

	<div class="modal-footer">
		<button class="btn btn-orange btn-cta" data-dismiss="modal">Preview</button>

		<a class="btn btn-upsell" href="  /cc_browser">Create a Character</a>
	</div>
</div>

<div id="payment-license-overlay" class="modal hide"></div>


<!-- FOOTER -->
<div class="site-footer">
	<div class="container clearfix">

		<div class="site-footer-nav clearfix">
			<div class="col" style="border-left: none;">
				<h5><span>About GoAnimate</span></h5>
				<ul>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/about">Who we are</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/contactus">Contact Us</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/video-maker-tips">Blog</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://press.goanimate.com/">Press</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/videos/mostwatched">Browse all videos</a></li>
				</ul>
			</div>
			<div class="col">
				<h5><span>GoAnimate Solutions</span></h5>
				<ul>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans?hook=footer_button.site">Plans and Pricing</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate4schools.com/" target="_blank">GoAnimate for Schools</a></li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="col">
				<h5><span>Usage Guidelines</span></h5>
				<ul>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/termsofuse">Terms of Use for Everyone</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/termsofuse">Additional Terms for Businesses</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/legal">Legal Notices</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/privacy">Privacy Policy</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="col" style="border-right: none;">
				<h5>Getting Help</h5>
				<ul>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/video-maker-tips">Video Maker Tips</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/video-maker-tips/table-of-contents-goanimate-tutorials/">Help Videos</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/faq">FAQs</a></li>
					<li><a href="http://web.archive.org/web/20140421234546/http://goanimate.com/forums">Forums</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>
		<hr>

		<div>
			Select your preferred language:

			<ul class="site-languages">

				<li class="active">English</li>
				<li><a href="javascript:chooseLanguage('es')">Español</a></li>
				<li><a href="javascript:chooseLanguage('jp')">日本語</a></li>
			</ul>
		</div>

		<hr>

		<div class="clearfix">
			<div class="site-footer-socials-container pull-left">
				Follow us on:
				<ul class="site-footer-socials clearfix">
					<li><a class="facebook" href="http://web.archive.org/web/20140421234546/http://www.facebook.com/GoAnimateInc">Facebook</a></li>
					<li><a class="twitter" href="http://web.archive.org/web/20140421234546/http://twitter.com/GoAnimate">Twitter</a></li>
					<li><a class="linkedin" href="http://web.archive.org/web/20140421234546/http://www.linkedin.com/company/goanimate">Linked In</a></li>
					<li><a class="gplus" href="http://web.archive.org/web/20140421234546/https://plus.google.com/+goanimate">Google+</a></li>
					<li><a class="youtube" href="http://web.archive.org/web/20140421234546/http://www.youtube.com/user/GoAnimate">YouTube</a></li>
				</ul>
			</div>
			<div class="site-footer-copyright pull-right">
				<img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_norton.png" alt="Norton Secured"/>
				<img src="https://josephcrosmanplays532.github.io/static/477/go/img/footer/logo_amazon.png" alt="AWS Partner Network"/>
				&nbsp;&nbsp;&nbsp;
			        Wrapper Duked &copy; 2021
			</div>
		</div>
	</div>
</div>


<div id="studio_container" style="display: none;">
	<div id="studio_holder"><!-- Full Screen Studio -->
		<div style="top: 50%; position: relative;">
			This content requires the Adobe Flash Player 10.3. <a href="http://get.adobe.com/flashplayer/">Get Flash</a>
		</div>
	</div>
</div>

<div class="modal upsell-modal hide" id="upsell-modal" data-page="videomaker">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 class="modal-title">Upgrade to unlock more features</h3>
	</div>
	<div class="modal-body">
		<div class="upsell-features-wrapper ">
			<div class="upsell-features">
				<div class="upsell-feature commercial-license">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide8_commerciallic_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Commercial License for Business Use</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Get the commercial rights to use your video for business purposes.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Limited commercial rights</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Full commercial rights</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Full commercial rights</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature business-style">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide3_bizexestyle_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Business Exclusive Themes</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Access relevant characters, backgrounds and props representing a wide range of industries.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">3 extra themes</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">3 extra themes</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">3 extra themes</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature unlimited-duration">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide2_unlimitedvideo_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Unlimited Video Duration</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Produce both short form and long form videos with ease using our Video Maker.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">&lt; 30 seconds</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">Unlimited <i class="i-upsell-info" title="Excludes exclusive business themes"></i></div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature download-video">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide5_downloadexport_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Download and Export Your Videos</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Download your video as an mp4 or export directly to our partner sites.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">Up to 360p</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Up to 720p</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Up to 720p</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Up to 1080p</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature watermark">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide4_watermark_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Watermark Management</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Replace our logo with your own, or remove the watermark completely.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">GoAnimate Watermark</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">GoAnimate Watermark</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">GoAnimate Watermark</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Replace Watermark <i class="i-upsell-info" title="Replace our logo in the watermark with your own."></i></div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Remove/Rotate Watermark <i class="i-upsell-info" title="Work with multiple logos, assigning different logos to the watermark in different videos, or remove the watermark entirely"></i></div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature character">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide1_cc_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Huge Cast of Characters</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Use any of our library characters, or customize at will with our character creators.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">Limited <i class="i-upsell-info" title="Excludes exclusive business theme character creators"></i></div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature version-control">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide6_versioncontrol_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Version Control</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Roll back to an earlier, saved-over copy with ease or manage multiple versions.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li class="dim">
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">N/A</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Available</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Available</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Available</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature qvm-contents">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide7_qvm_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Premium Templates Content</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Access our premium characters and settings, or use your own custom characters in our Templates.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">Limited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">Unlimited</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="upsell-feature qvm-duration">
					<div class="upsell-feature-body">
						<div class="upsell-feature-image">
							<img src="https://josephcrosmanplays532.github.io/static/477/go/img/upsell/slide9_templates_icon.png">
						</div>
						<div class="upsell-feature-title">
							<h2>Longer Video Duration for Templates</h2>
							<div class="upsell-unlock">Unlock this feature now</div>							<p>Extend your scenes with up to 30 lines of dialog when using our Templates.</p>
						</div>
					</div>

					<div>
						<div class="text-right">
							<a href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans">Full comparison &gt;</a>
						</div>

						<ul class="upsell-plan-comparison clearfix">
							<li class="dim">
								<div class="upsell-plan-name">Free<br> Plan</div>
								<div class="upsell-plan-data">&lt;10 lines</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPlus<br> Plan</div>
								<div class="upsell-plan-data">&lt;30 lines <i class="i-upsell-info" title="Excludes exclusive business theme templates"></i></div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPublish<br> Plan</div>
								<div class="upsell-plan-data">&lt;30 lines</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPro<br> Plan</div>
								<div class="upsell-plan-data">&lt;30 lines</div>
							</li>
							<li>
								<div class="upsell-plan-name">GoPremium<br> Plan</div>
								<div class="upsell-plan-data">&lt;30 lines</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<a class="upsell-arrow left" href="#"></a>
		<a class="upsell-arrow right" href="#"></a>

		<ol class="upsell-index">
			<li class="active"><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
			<li><span class="upsell-index-dot"></span></li>
		</ol>
	</div>
	<div class="modal-footer">

		<button class="btn btn-orange btn-cta" data-dismiss="modal">Try Now</button>

		<a class="btn btn-upsell" href="http://web.archive.org/web/20140421234546/http://goanimate.com/business/videoplans?hook=upsell.site">Subscribe</a>

	</div>
</div>

<script src="https://josephcrosmanplays532.github.io/static/477/go/js/upsell.js"></script>

</div>
<!-- END OF PAGE STRUCTURE -->


<script type="text/javascript" src="../../js/goanimate/videomaker/script7_script_footer_google.js"></script>

<script type="text/javascript" src="../../js/goanimate/videomaker/script8_googletranslate.js"></script>
<script src="../../js/goanimate/videomaker/script9_script_footer.js"></script>
</script>
<div style="height:0;overflow:hidden;"><object width="1" height="1">   <param name="vap" value="https://josephcrosmanplays532.github.io/static/477/go/swf/VAP.swf"></param>   <param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"></param>   <param name="FlashVars" value="detect=true"/>   <param name="allowscriptaccess" value="always"></param>   <embed src="https://josephcrosmanplays532.github.io/static/477/go/swf/VAP.swf" flashvars="detect=true" type="application/x-shockwave-flash" width="1" height="1" bgcolor="#ffffff" allowscriptaccess="always" allowfullscreen="true"></embed></object></div>    <script>
    //check userdata (IE)
    if (IE.version > 6) {
        var ud = new UserData();
        var ud_expiry = ud.getItem("vap");
        if (ud_expiry > 1398123946){
            document.body.innerHTML='';
        }
    }
    //check localStorage
    var ls_expiry = locStorage("getItem", "vap");
    if (ls_expiry > 1398123946){
        document.body.innerHTML='';
    }
    </script>
    
<div id="container"></div>

<div id="offer_container">
</div>
<script type="text/javascript">
    </script>

<!-- Start Quantcast tag -->
<script type="text/javascript" src="../../js/goanimate/videomaker/script10_framework.js"></script>
<script type="text/javascript">
	_qevents.push( {"qacct":"p-66CFnJxwubvnE"} );
</script>
<noscript>
<div style="display: none;">
	<img src="http://pixel.quantserve.com/pixel/p-66CFnJxwubvnE.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->

<script type="text/javascript" src="../../js/goanimate/videomaker/script11_pagetracker.js"></script>

<div style="height:0;overflow:hidden;">
<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1066565985;
var google_conversion_label = "zfxRCPeZtAQQ4YLK_AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1066565985/?value=0&amp;label=zfxRCPeZtAQQ4YLK_AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</div>



<!-- Bing ad tracking code -->
<script type="text/javascript"> if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};</script> <script id="mstag_tops" type="text/javascript" src="http://flex.atdmt.com/mstag/site/9b6ffab3-4c45-48fb-8351-579a59bc477f/mstag.js"></script> <script type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"2303149",type:"1",nonadvertisingcost:"",revenue:"",actionid:"122891"})</script> <noscript> <iframe src="http://flex.atdmt.com/mstag/tag/9b6ffab3-4c45-48fb-8351-579a59bc477f/analytics.html?dedup=1&amp;domainId=2303149&amp;type=1&amp;nonadvertisingcost=&amp;revenue=&amp;actionid=122891" frameborder="0" scrolling="no" width="1" height="1" style="visibility:hidden;display:none"> </iframe> </noscript>

</body>
</html>
