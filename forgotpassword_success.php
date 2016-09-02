<?php  

session_start();
require_once("class.user.php");
$user = new USER();

if($user->is_loggedin()!="")
{
  $user->redirect('advancedtutorials.php');
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
  
  <title>GDS APPRAISAL APP | Password reset request sent successfully</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/slider/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jquery.background-video.css" type="text/css">
  
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
                        <span class="mbr-brand__name"><a class="mbr-brand__name" href="index.php">GDS APPRAISAL</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger" style="color:#141412"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                        	<ul class="mbr-navbar__items mbr-navbar__items--right" style="margin:8px 0 0 0;">
                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="features.php">Features</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="theapp.php">The App</a></li>
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="aboutus.php">About Us</a></li>
                                <li class="mbr-navbar__item gdslogin"><a class="mbr-buttons__link btn" href="login.php">Login</a></li>
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


<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" style="background-image: url(assets/images/loginbg.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched">
              <div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row">
                   
                   	<div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                                <div class="mbr-header mbr-header--center mbr-header--std-padding">
                                    <h2 class="mbr-header__text text-white">PASSWORD RESET REQUEST SENT SUCCESSFULLY</h2>
                                    <p class="text-white" style="font-size:18px;">Please check your email for the link to reset your password.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
      <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

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