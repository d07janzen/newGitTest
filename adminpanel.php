<?php 

require_once("session.admin.php");

require_once("class.admin.php");
$auth_admin = new ADMIN();

$admin_id = $_SESSION['admin_session'];
$stmt = $auth_admin->runQuery("SELECT * FROM admins WHERE id = :admin_id");
$stmt->execute(array(":admin_id"=>$admin_id));
$admin_row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- If we use the CDN version -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

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
  
  <title>GDS APPRAISAL APP | Admin Panel</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/slider/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/css/jquery.background-video.css">
  <link rel="stylesheet" href="assets/datatables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatables/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatables/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatables/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="assets/datatables/css/scroller.bootstrap.min.css">
  
  
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="assets/images/gdslogo.png"> <span>GDS Appraisal</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="adminpanel.php"><i class="fa fa-home"></i> Home</a></li>
                  <!-- <li><a href="#"><i class="fa fa-gear"></i> Settings</a> </li> -->
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
<!--             <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <!--div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div-->

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="images/img.jpg" alt=""> -->
                    <?php echo $admin_row['first_name'] .' '. $admin_row['last_name'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!--  <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="logout.admin.php?logout=true"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

<!--                 <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          New registration
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span>
                          <span>John Doe</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          New registration
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span>
                          <span>John Long</span>
                          <span class="time">5 days ago</span>
                        </span>
                        <span class="message">
                          Request to deactivate
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span>
                          <span>John John</span>
                          <span class="time">3 weeks ago</span>
                        </span>
                        <span class="message">
                          Request to deactivate
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div id="page-content"></div>
               
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            copyright 2016 <a href="http://gdsappraisal.com/" target="_blank">GDS Appraisal App</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
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

    <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables/js/dataTables.buttons.min.js"></script>
    <script src="assets/datatables/js/buttons.bootstrap.min.js"></script>
    <script src="assets/datatables/js/buttons.html5.min.js"></script>
    <script src="assets/datatables/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/datatables/js/dataTables.keyTable.min.js"></script>
    <script src="assets/datatables/js/dataTables.responsive.min.js"></script>
    <script src="assets/datatables/js/responsive.bootstrap.js"></script>
    <script src="assets/datatables/js/datatables.scroller.min.js"></script>
  
  <script>
  	$(window).load(function () {
		"use strict";    
		$('#loader').fadeOut();
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>



<!-- MANUAL AJAX WITHOUT USING EXTERNAL SRC -->
 <!--    <script type="text/javascript">
    function showUsers() { 
      if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
      } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById("showUsers").innerHTML = xmlhttp.responseText;
          }
      };
      xmlhttp.open("GET","getusers.php",true);
      xmlhttp.send();
    }
    showUsers();  
    </script> -->

<!-- JQUERY AJAX (this can be inserted at the head tag because it has the document ready event-->
    <script type="text/javascript">
      $(document).ready(function(){
          $("#page-content").load("page-content.php");
      });
    </script>


    
    

    
  </body>
</html>