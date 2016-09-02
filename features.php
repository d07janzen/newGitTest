<?php  
session_start();//Give PHP the session information, so you can destroy when you logout and most importantly use the session variable
require_once("class.user.php");
$login = new USER();//Connect to the server everytime because the link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier explicitly
if($login->is_loggedin()!="")
{
  $is_loggedin = true;
}else{
   $is_loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Manila Path & Pixel, Inc, manilapath.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/discover-mobile-350x350-16.png" type="image/x-icon">
  <meta name="description" content="Official website of the GDS Link Asia Appraisal App">
  <meta name="author" content="GDS Link Asia">
  
  <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/images/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="assets/images/favicons/manifest.json">
  <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#494586">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-144x144.png">
  <meta name="theme-color" content="#7a77a3">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico?v=1.0" />
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="assets/images/favicons/favicon.ico?v=1.0" />
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="icon" href="assets/images/favicons/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/faviconsfavicon.ico" type="image/x-icon" />
  <link href="favicon.ico" rel="shortcut icon"></link>
  
  <title>GDS APPRAISAL APP | Features & Benefits</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/slider/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jquery.background-video.css" type="text/css">
  <link rel="stylesheet" href="assets/css/lightcase.css" type="text/css">
  
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
    
</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-41">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.php"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/gdslogo.png" alt="GDS Link App"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name" href="index.php">GDS APPRAISAL</a></span>                    </span>                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger" style="color:#141412"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                        	<ul class="mbr-navbar__items mbr-navbar__items--right" style="margin:8px 0 0 0;">
                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="features.php"><span class="nowactive">Features</span></a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="theapp.php">The App</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="aboutus.php">About Us</a></li>
                                
                                <?php 
                                if ($is_loggedin) {
                                ?>  
                                  <li class="mbr-navbar__item gdslogin"><a class="mbr-buttons__link btn" href="logout.user.php?logout=true">Logout</a></li>
                                <?php
                                }else{
                                ?>
                                  <li class="mbr-navbar__item gdslogin"><a class="mbr-buttons__link btn" href="login.php">Login</a></li>
                                <?php
                                }
                                ?>

                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="#" style="padding:0; margin:8px 0 0 0;" id="gdsmenudivider"> | </a></li>
                                <li class="mbr-navbar__item gdsdownload"><a class="mbr-buttons__link btn" href="https://play.google.com/store/apps/details?id=com.gds.appraisal.main" target="_blank">Download</a></li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" style="background-image: url(assets/images/featuresbg2.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row" style="padding-top:30px;">
                   <div class="col-sm-6">
&nbsp;                   </div>
                   <div class="col-sm-6" style="padding-top:50px;">
                      <div class="mbr-hero animated fadeInUp fullgdsfeatures" style="padding-left: 50px;">
                        <h2 class="mbr-hero__text titlegdsfeatures">FEATURES & BENEFITS</h2>
                        <p class="mbr-hero__subtext textgdsfeatures" style="padding-right:20px; font-size:12px; letter-spacing:normal;">With the GDS Mobile Appraisal App, field appraisers like you now have the luxury of MOBILITY. This means you can have more accomplishments during your filed work
                         and less spending time in the office generating reports.<br><br>
You no longer need to bring any documents, cameras, or a clip board, all of the tools needed are already integrated into your handheld device. 
<br></p>
                      </div>  
                   </div>
               </div>
            </div>
          </div>
        </div>
    </div>
</section>


<section class="mbr-slider mbr-section mbr-section--no-padding" id="gdsfeature01" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container container mbr-section__container--isolated">

    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center gdsappfeatures">
        <div class="row gdscontent">
          <h3 style="text-align:center;">MOBILITY</h3><br />
          
          <img src="assets/images/hordivbig.png" style="border:none; width:47px; height:4px;"><br /><br />
          
          <p class="text-black text-center">Job requests are transmitted from the office to field agents and all data gathered from the field are transferred back to the office instantaneously in micro-seconds and minimal file size.<br /><br />

			Our clients in the banking industry do not require their field agents to come into the office anymore, simply because they can accomplish more doing field work and transmitting data to-and-from the office,
which are converted into a customized report.</p>
        </div>​     </div>
	</div>
</section>




<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="gdsfeature02" style="background-color: rgb(243, 240, 240);"> 
    <div class="mbr-section__container mbr-section__container--std-padding container gdsappfeatures">
        
        <div class="row gdscontent">
        	<h3 style="text-align:center;">EFFICIENCY & ACCURACY</h3><br />
             <div style="text-align:center"><img src="assets/images/hordivbig.png" style="border:none; width:47px; height:4px;"></div><br />
        	
            <div class="col-sm-6 col-md-6" style="padding:-5px 35px 35px 35px;">
            	<div class="featurestitle">COMPARATIVE ANALYSIS</div>
                <p class="featurestext">A centralized database to retrieve comparables based to the similarity of your choice, whether it be by location, land type, price range, or proximity. <br /><br />
                    <a id="comparanalysis" class="button line-blue" data-rel="lightcase" title="Comparative Analysis" href="assets/images/videos/comparatives.mp4">
                        Watch the video &nbsp;<img src="assets/images/arrowright.png" style="border:none; width:6px; height:12px;">
                    </a>
                </p>
                
            </div>
            <div class="col-sm-6 col-md-6" style="padding:-5px 35px 35px 35px;">
            	<img src="assets/images/comparative_analysis.png" style="border:none;">            </div>
        </div>
        
        <div class="row">
        	<div class="col-sm-6 col-md-6" style="padding:25px 35px 35px 35px;">
            	<img src="assets/images/receiving.png" style="border:none;">            </div>
            <div class="col-sm-6 col-md-6" style="padding:150px 35px 35px 35px;">
            	<div class="featurestitle">AUTOMATIC DISTRIBUTION</div>
                <p class="featurestext">Job orders can be distributed automatically to the field appraisers by either location based, tier or work load. This means, appraisal requests can and will be sent to the appropriate party for faster processing.</p>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-sm-6 col-md-6" style="padding:130px 35px 35px 35px;">
            	<div class="featurestitle">MAPS & GPS</div>
                <p class="featurestext">Incorporating Google Maps in order to generate vicinity maps for the reports and act as a GPS system to locate properties for agents in the field reducing time wasted from getting lost in finding the subject property.</p>
            </div>
            <div class="col-sm-6 col-md-6" style="padding:25px 35px 35px 35px;">
            	<!--img src="assets/images/mapsgps.png" style="border:none;"-->
                <div class="row">
					<div class="col-sm-6"><img src="assets/images/mapdetails.png" alt="map details"></div>
					<div class="col-sm-6"><img src="assets/images/mapgoogle.png" alt="Google map integration"></div>
				</div>
            </div>
        </div>
    </div>
</section>


















<section class="mbr-slider mbr-section mbr-section--no-padding" id="gdsfeature03" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container container mbr-section__container--isolated gdsappfeatures">
    
    <div class="row gdscontent">
		<h3 style="text-align:center;">REPORTS MONITORING</h3><br />
        <div class="col-sm-6 col-md-6" style="padding:30px 50px 35px 35px; border-right:2px solid #e1e0ea;">
        	<div class="featurestitle">INSTANT CUSTOMIZED REPORTS</div>
			<p class="featurestext">Report generation has never been this easy for any bank. We have customized the report templates so they are done as soon as field agents sends it back to the office, instantaneously. <br /><br />
            	<a id="instantcustom" data-rel="lightcase" title="Instant Customized Reports" href="assets/images/videos/report.mp4">
            		Watch the video &nbsp;<img src="assets/images/arrowright.png" style="border:none; width:6px; height:12px;">
            	</a>
            </p>
        </div>
		<div class="col-sm-6 col-md-6" style="padding:30px 35px 35px 65px;">
        	<div class="featurestitle">REAL-TIME TURNAROUND REPORTS</div>
			<p class="featurestext">Because we use a system, all activities are trackable, measured and reported in real-time. Our clients will never have to save or open in an excel sheet anymore. They have access to monitor their performances at any time by pressing a button. <br /><br />
            	<a id="realtimeturn" data-rel="lightcase" title="Real-time Turnaround Reports" href="assets/images/turnaroundtime.jpg">
            		See a sample report &nbsp;<img src="assets/images/arrowright.png" style="border:none; width:6px; height:12px;">
            	</a>
            </p>
        </div>
	</div>
	</div>
</section>




<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="featuresform1-56" style="background-color: rgb(40, 40, 40);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                     <div data-form-type="formoid">
                      <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h3 class="gdstitle text-white" style="font-weight:normal; letter-spacing:normal; font-size:19px;">REQUEST A LIVE DEMO NOW</h3><br />
                            <div style="text-align:center"><img src="assets/images/hordiv_white.png"></div><br />
                            <span style="color: #fff; padding: 0px 20px; font-size:15px; padding:0 100px;">Try a live demo of the GDS Mobile Appraisal System and see how appraisers have tripled their productivity by giving them the ability to perform all tasks using their Smart handheld devices.<br />

We can go to you or we can use our training facilities located in Makati or in Quezon City.</span>                      </div>
                      <form action="http://mobirise.com/" method="post" data-form-title="CONTACT FORM">
                      <input type="hidden" value="QYJJaXGQjybL3tPwmy5gVHDBKrBiZhkaLK3dCJW6kNvmuOXshLhplWMAVdoP2cl/TEEfJN6b5AaXPGdEknB1LdX6uNy0iQCaIXXTCTsdFjPfukdK8Z38sYcUA891l25U" data-form-email="true">
                      <div data-form-alert="true"></div>
                      <div class="col-lg-3" style="margin:5px 0px; padding:0 10px;"><input type="text" class="gdsform-control" name="name" required="" placeholder="name*" data-form-field="Name"></div>
                      <div class="col-lg-3" style="margin:5px 0px; padding:0 10px;"><input type="text" class="gdsform-control" name="company" required="" placeholder="company*" data-form-field="Company"></div>
                      <div class="col-lg-3" style="margin:5px 0px; padding:0 10px;"><input type="tel" class="gdsform-control" name="phone" placeholder="contact number" data-form-field="Phone"></div>
                      <div class="col-lg-3" style="margin:5px 0px; padding:0 10px;"><div class="mbr-buttons mbr-buttons--left"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-gds">SUBMIT</button></div></div>
                      </form>
                     </div>       
                </div>
            </div>
        </div>
    </div>
</section>






<footer class="mbr-section--relative mbr-section--fixed-size" id="footer1-58" style="background-color: rgb(6, 7, 8); max-height:46px;">
    <div class="mbr-section__container container">
        <div class="mbr-footer--wysiwyg row">
            <div class="col-sm-12 gdsfooter">
                <p class="mbr-footer__copyright"></p><p>Copyright &#169; 2016 <a href="www.gdslinkasia.com" style="color: #ffffff; text-decoration: none;"> GDS Link Asia</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Go To Top Link -->
  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Back to Top" data-toggle="tooltip" data-placement="top">
      <span class="glyphicon glyphicon-chevron-up"></span>  </a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/js/jquery.background-video.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/js/lightcase.js"></script>
  <script src="assets/js/lightcase.init.js"></script>
  
  <script>
  	$(window).load(function () {
		"use strict";    
		$('#loader').fadeOut();
	});
	
	
	$(document).ready(function(){
		$('.jquery-background-video').bgVideo({fadeIn: 2000});
	});
  
  </script>
  
  <script type="text/javascript">
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
	});
  </script>
</body>
</html>