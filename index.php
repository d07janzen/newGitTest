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
  
  <title>GDS APPRAISAL APP | Welcome! This is the official website of the GDS Appraisal App</title>
  
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
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
                <div class="mbr-navbar__hamburger mbr-hamburger" style="color:#141412!important;"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                        	<ul class="mbr-navbar__items mbr-navbar__items--right" style="margin:8px 0 0 0;">
                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn" href="features.php">Features</a></li>
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


<div class="mbr-section--full-height video-hero jquery-background-video-wrapper demo-video-wrapper" style="background-color: rgb(254, 241, 238);">
  <video class="jquery-background-video" autoplay muted loop volume="0" data-wow-delay="0.5s">
    <source src="assets/frontpage-video/GDSsplash.mp4" type="video/mp4">
    <source src="assets/frontpage-video/GDSsplash.ogv" type="video/ogg">
    Your browser does not support the video tag. Please update your browser.
  </video>

  <div class="page-width gdsvideotext">
	<div class="video-hero--content">
		<h2>GDS Mobile Appraisal App</h2>
		<p>Appraisal Efficiency through Technology</p>
	</div>
  </div>
  <div class="mbr-arrow mbr-arrow--floating text-center" style="padding-top:300px;">
  	<div class="mbr-section__container container">
  		<a href="#features1-42">
        	<span class="text-white" style="display:block; font-family: 'Varela Round', sans-serif; font-size:15px; font-weight:normal; margin-bottom:20px; text-decoration:none;">Find out more</span>
        </a><br />
        <a class="mbr-arrow__link" href="#features1-42"><i class="glyphicon glyphicon-menu-down"></i></a>
  	</div>
  </div>
</div>
<!-- End video hero -->




<section class="content-2" id="features1-42" style="background-color: rgb(40, 40, 40); height:350px;">

<div class="col-sm-12 marginoffset">
    <div class="row">
      <p class="gdstitle text-white" style="font-size:21px;">THE GDS APPRAISAL MOBILE APPLICATION<br /> IS CHANGING THE VALUATION INDUSTRY</p><br />
      <div style="text-align:center;"><img src="assets/images/hordiv_whitebig.png"></div><br /><br />
      <p class="text-white">
      	Used by the country's top banking institutions and appraisal companies<br>
        The only tool appraisers need during field work<br>
        Appraisal work is now done in a matter of hours<br>
      </p>
    </div>​<!-- end outer row -->
 </div>
 
 <!--div class="mbr-arrow mbr-arrow--floating text-center">
  	<div class="mbr-section__container container">
  		<a class="mbr-arrow__link" href="#header1-43"><i class="glyphicon glyphicon-menu-down" style="color: #77749f;"></i></a>
  	</div>
  </div-->

</section>



<section class="content-2 col-3" id="gdsfrontfeatures-80" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <!--div class="image"><img class="undefined" src="assets/images/phone-350x350-12.png"></div-->
                    <div class="caption">
                        <div>
                            <h3>MOBILITY</h3>
                            <img src="assets/images/hordiv.png"><br />
                            <p>More accomplishments on the field with less office time spent generating reports.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="middlefeature">
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h3>EFFICIENCY &amp; ACCURACY</h3>
                            <img src="assets/images/hordiv.png"><br />
                            <p>Comparison data and values are automatically calculated.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                            <h3>MEASUREMENTS MONITORING</h3>
                            <img src="assets/images/hordiv.png"><br />
                            <p>All activities, behavior and performances are traceable, measured and reported conveniently in real-time.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<section  id="header1-43ace" style="background-color:#434165;">
	<div style="width:100%; overflow: hidden;">
		<div class="row">
                  
                  <div class="col-sm-6" style="padding-left: 13%; padding-top:6%; padding-right:20px;">
                    <div class="mbr-hero animated fadeInUp">
                        <h3>ON-THE-GO CONVENIENCE</h3>
                        <img src="assets/images/hordiv_white.png"><br />
                        <p>The GDS Appraisal App is the perfect tool for "Appraisals on the Go". 
All the tools needed to generate any appraisal report such as the plottingtool, digital documents, vicinity maps, comparable analysis, photographs, 
and all the data gathering tools are within your reach at anytime.</p>

<p>The GDS Appraisal app gives you powerful features and mobility.</p><br /><br />
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay 

btn-info2" href="https://play.google.com/store/apps/details?id=com.gds.appraisal.main" target="_blank" style="font-weight:normal">TRY IT FOR FREE</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay btn-info2"
href="theapp.php#gdsapptuts" style="font-weight:normal">HOW TO USE THE APP</a></div>
                  </div>
                  
                  <div class=" col-sm-6">
  					<img src="assets/images/gdsmobileview.jpg" style="width:100%; height:auto;">
                  </div>
                  
		</div>
	</div>
</section>




<section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="gdspromotion"
   style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container container article-slider mbr-section__container--isolated" style="padding-top:50px; padding-bottom:50px;">

        
        <div class="col-sm-10 col-sm-offset-1">
            
            <ol class="carousel-indicators gdsfeaturesindicators" style="margin-bottom:0;">
                <li data-app-prevent-settings="" data-target="#gdspromotion" data-slide-to="0" class="active"></li>
                <li data-app-prevent-settings="" data-target="#gdspromotion" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center active">
                    <div class="mbr-box__magnet">
                        <div>
                            <img src="assets/images/slideshow/features01.png">
                            <div class="row">
                              <div class="col-sm-4 col-sm-offset-1">
                                <div class="btn-inverse mbr-buttons--center gdsdownloadbtn">
                                	<a class="mbr-buttons__btn btn btn-lg btn-primary btn-gds" href="https://play.google.com/store/apps/details?id=com.gds.appraisal.main" target="_blank">DOWNLOAD NOW!</a>
                                </div>
                              </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center">
                    <div class="mbr-box__magnet">
                        <div>
                            <a href="https://play.google.com/store/apps/details?id=com.gds.appraisal_iprea.main&hl=en" target="_blank"><img src="assets/images/slideshow/features02.png"></a>
                            
                         </div>
                    </div>
                </div>
                
            </div>
            
            <!--a data-app-prevent-settings="" class="left carousel-control gdsfrontcarousel" role="button" data-slide="prev" href="#gdspromotion">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control gdsfrontcarousel" role="button" data-slide="next" href="#gdspromotion">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a-->
        </div>
        <!--div class="mbr-arrow mbr-arrow--floating text-center" style="bottom:30px;">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#gdstestimonials" style="color:#7a77a2;"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div-->
    </div>
</section>








<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="gdsclientlogos" style="background-color: rgb(40, 40, 40);">
	<div class="mbr-section__container container mbr-section__container--isolated">
		<div class="row"> <!-- row -->

			
			<h2 class="mbr-section__header gdshighlight gdstitle" style="letter-spacing: normal; font-size:19px;">OUR CLIENTS</h2><br />
            <div style="text-align:center"><img src="assets/images/hordiv_white.png"></div><br /><br />

			<div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_ca.png" style="border:0;">
			</div>
            <div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_sb.png" style="border:0;">
			</div>
            <div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_mb.png" style="border:0;">
			</div>
            <div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_iprea.png" style="border:0;">
			</div>
            <div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_tci.png" style="border:0;">
			</div>
            <div class="col-sm-2" style="text-align: center;">
				<img src="assets/images/client_pnb.png" style="border:0;">
			</div>
					





		</div> <!-- row -->
	</div>
</section>







<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="gdstestimonials" style="background-color: rgb(241, 241, 241);"> 
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding:50px 0 30px 0;">
        <div class="row">
        	<h2 class="mbr-section__header gdshighlight gdstitle text-black" style="color:black; letter-spacing: normal; font-size:19px;">WHAT OUR CLIENTS ARE SAYING</h2><br />
            <div style="text-align:center"><img src="assets/images/hordiv.png"></div><br />
        	
            <div class="col-sm-6 col-md-6" style="padding:-5px 35px 35px 35px;">
                <div style="background:#ffffff; border-radius:20px; padding:40px 30px; display:inline-block;">
                    <p class="mbr-reviews__p">"...as President of IPREA, I am excited and elated cooperating with GDS Link Asia on promoting the use of a digital application for various solutions to numerous valuation engagements. IPREA recognizes the importance of digital applications offering to accelerate the processing time to deliver the much needed valuation reports."</p>
					<span class="mbr-reviews__author" style="width:180px; margin-top:30px; float:right;">
						<img src="assets/images/iprealogo.png" style="float:left;">
						<div style="text-align:left; padding-top:30px;">                           	
                                        LEO ALBANO<br />
                                        President<br />
                                        I. P. R. E. A.
						</div>
					</span>
				</div> 
            </div>
            
            <div class="col-sm-6 col-md-6" style="padding:-5px 35px 35px 35px;">
            	<div style="background:#ffffff; border-radius:20px; padding:40px 30px; display:inline-block;">
                    <p class="mbr-reviews__p">"It is our pride to be your partner for the development of a robust mobile appraisal system solution that will significantly improve our processes. With your continued and untiring support, our system will surely be a step ahead in the market."</p>
					<div class="mbr-reviews__author" style="margin-top:60px; ">
						<img src="assets/images/sblogo.png" style="float:left;">
						<div style="text-align:left; padding-top:20px;">                           	
                                        JUANCHO MAGPANTAY<br />
                                        Head, Credit Investigation and Appraisal Department<br />
                                        Security Bank Corporation
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>




<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-56" style="background-color: rgb(40, 40, 40);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                     <div data-form-type="formoid">
                      <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h3 class="gdstitle text-white" style="font-weight:normal; letter-spacing:normal; font-size:19px;">REQUEST A LIVE DEMO NOW</h3><br />
                            <div style="text-align:center"><img src="assets/images/hordiv_white.png"></div><br />
                            <span style="color: #fff; padding: 0px 20px; font-size:15px; padding:0 100px;">Try a live demo of the GDS Mobile Appraisal System and see how appraisers have tripled their productivity by giving them the ability to perform all tasks using their Smart handheld devices.<br />

We can go to you or we can use our training facilities located in Makati or in Quezon City.</span>
                      </div>
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


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-57" style="background-color: rgb(234, 224, 221);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-8">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="14.558221064262877,121.01845110873717"></p>
                    </div>
                </figure>
            </div>
            <div class="col-sm-4">

                    	<p class="mbr-contacts__text"><strong>Contact</strong></p>
                        <img src="assets/images/gdslogo.png" alt="GDS Link App"><br>
                        GDS Link Asia<br>
                        5/F Suite 506, Rufino Plaza<br>
                        6784 Ayala Avenue, Makati City<br>
                        Philippines 1226<br><br>
                        <i class="glyphicon glyphicon-earphone"></i> (+63)02 823.7799<br>
                        <i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@gdslinkasia.com">info@gdslinkasia.com</a><br>
                        <i class="glyphicon glyphicon-globe"></i> <a href="www.gdslinkasia.com" target="_blank">www.gdslinkasia.com</a><br><br>
                        <a href="https://www.facebook.com/GdsLinkAsia" target="_blank"><img src="assets/images/facebook.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <img src="assets/images/linkedin.png"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <a href="https://www.youtube.com/channel/UC8pJtPmCA1alg_3VSAMgHGA" target="_blank"><img src="assets/images/youtube.png"></a>

            </div>
        </div>
    </div>
</section>

<footer class="mbr-section--relative mbr-section--fixed-size" id="footer1-58" style="background-color: rgb(6, 7, 8); max-height:46px;">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer--wysiwyg row">
            <div class="col-sm-12 gdsfooter">
                <p class="mbr-footer__copyright"></p><p>Copyright &#169; 2016 <a href="www.gdslinkasia.com" style="color: #FFFFFF; text-decoration: none;"> GDS Link Asia</a></p><p></p>
            </div>
        </div>
    </div>
</footer>

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
		$('.jquery-background-video').bgVideo({fadeIn: 100});
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