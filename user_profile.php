<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/connect.php');

if(!isset($_SESSION["Username"]) || !isset($_SESSION["Password"]))
  header("location:login.php");

if(isset($_SESSION["Username"]) && isset($_SESSION["Password"])){
  $Username=$_SESSION["Username"];
  $result = $con->prepare("SELECT * FROM users WHERE username ='".$Username."' OR email ='".$Username."'");
  $result->execute();
  $row = $result->fetch();
}

?>
<!DOCTYPE htm<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Neikee" />
  <meta name="keywords" content="funding,Crowdfunding,NGO,social,social cause,Neikee" />
  <meta name="author" content="Kodexlabs" />

  <!-- Page Title -->
  <title>Neikee - Charity & Crowdfunding Neikee</title>

  <!-- Favicon and Touch Icons -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <!-- Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet"/>
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
  <!-- CSS | Main style file -->
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
  <div class="body-overlay"></div>
  <div id="side-panel" class="dark" data-bg-img="http://placehold.it/1920x1280">
    <div class="side-panel-wrap">
      <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon_close font-30"></i></a></div>
      <a href="javascript:void(0)"><img alt="logo" src="images/logo-wide.png"></a>
      <div class="side-panel-nav mt-30">
        <div class="widget no-border">
          <nav>
            <ul class="nav nav-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a class="tree-toggler nav-header">Pages <i class="fa fa-angle-down"></i></a>
                <ul class="nav nav-list tree">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>        
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="side-panel-widget mt-30">
        <div class="widget no-border">
          <ul>
            <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a href="#" class="text-gray">123-456-789</a> </li>
            <li class="font-14 mb-5"> <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00 to 2:00 </li>
            <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#" class="text-gray">contact@yourdomain.com</a> </li>
          </ul>      
        </div>
        <div class="widget">
          <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <p>Copyright &copy;2016 ThemeMascot</p>
      </div>
    </div>
  </div>
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
          <div class="container">
            <nav id="menuzord" class="menuzord orange bg-light">
              <div class="pull-left" style="padding-right:1.2em !important; padding-top: 1em !important;">
                <img src="images/logo.png" alt="">
              </div>
              <ul class="menuzord-menu" style="margin-left:2em;">
                <li class="active"><a href="#home">Home</a>
                  <li><a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="page-become-a-volunteer.html">Become a Volunteer</a></li>
                      <li><a href="#">Shop <span class="label label-success">New</span></a>
                        <ul class="dropdown">
                          <li><a href="shop-category.html">Category</a></li>
                          <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                          <li><a href="shop-product-details.html">Product Details</a></li>
                          <li><a href="shop-cart.html">Cart</a></li>
                          <li><a href="shop-checkout.html">Checkout</a></li>
                        </ul>
                      </li>
                      <li><a href="#">About</a>
                        <ul class="dropdown">
                          <li><a href="page-about1.html">About Style1</a></li>
                          <li><a href="page-about2.html">About Style2</a></li>
                          <li><a href="page-about3.html">About Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Services</a>
                        <ul class="dropdown">
                          <li><a href="page-services1.html">Services Style1</a></li>
                          <li><a href="page-services2.html">Services Style2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Gallery <span class="label label-warning">New</span></a>
                        <ul class="dropdown">
                          <li><a href="page-gallery-3col.html">3 Columns</a></li>
                          <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                          <li><a href="page-gallery-4col.html">4 Columns</a></li>
                          <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                          <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                          <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                          <li><a href="page-gallery-3col-tiles.html">3 Columns Tiles</a></li>
                          <li><a href="page-gallery-4col-tiles.html">4 Columns Tiles</a></li>
                          <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                          <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                          <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                        </ul>
                      </li>
                      <li><a href="#">FAQ</a>
                        <ul class="dropdown">
                          <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                          <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                          <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                          <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Contact</a>
                        <ul class="dropdown">
                          <li><a href="page-contact1.html">Contact Style1</a></li>
                          <li><a href="page-contact2.html">Contact Style2</a></li>
                          <li><a href="page-contact3.html">Contact Style3</a></li>
                          <li><a href="page-contact4.html">Contact Style4</a></li>
                          <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                          <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Calender</a>
                        <ul class="dropdown">
                          <li><a href="page-calender1.html">Calender Style1</a></li>
                          <li><a href="page-calender2.html">Calender Style2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events</a>
                        <ul class="dropdown">
                          <li><a href="#">Events Calendar</a>
                            <ul class="dropdown">
                              <li><a href="events-calendar-style1.html">Calendar Style1</a></li>
                              <li><a href="events-calendar-style2.html">Calendar Style1</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Events Grid</a>
                            <ul class="dropdown">
                              <li><a href="events-grid-2column.html">Grid 2column</a></li>
                              <li><a href="events-grid-3column.html">Grid 3column</a></li>
                              <li><a href="events-grid-4column.html">Grid 4column</a></li>
                              <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                              <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Events List</a>
                            <ul class="dropdown">
                              <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                              <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                              <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Events Details</a>
                            <ul class="dropdown">
                              <li><a href="events-details-style1.html">Details Style1</a></li>
                              <li><a href="events-details-style2.html">Details Style2</a></li>
                              <li><a href="events-details-style3.html">Details Style3</a></li>
                            </ul>
                          </li>
                          <li><a href="events-table.html">Events Table</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Causes</a>
                        <ul class="dropdown">
                          <li><a href="page-cause-list.html">Cause List</a></li>
                          <li><a href="page-cause-grid.html">Cause Grid</a></li>
                          <li><a href="page-cause-details.html">Cause Details</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Job <span class="label label-success">New</span></a>
                        <ul class="dropdown">
                          <li><a href="job-list.html">Job List</a></li>
                          <li><a href="job-details-style1.html">Job Details Style1</a></li>
                          <li><a href="job-details-style2.html">Job Details Style2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pricing</a>
                        <ul class="dropdown">
                          <li><a href="page-pricing1.html">Pricing Style1</a></li>
                          <li><a href="page-pricing2.html">Pricing Style2</a></li>
                        </ul>
                      </li>
                      <li><a href="page-about4.html">Page with Sidebar</a>
                        <ul class="dropdown">
                          <li><a href="page-sidebar-right.html">Page Right Sidebar</a></li>
                          <li><a href="page-sidebar-left.html">Page Left Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Page 404</a>
                        <ul class="dropdown">
                          <li><a href="page-404-style1.html">Style1</a></li>
                          <li><a href="page-404-style2.html">Style2</a></li>
                          <li><a href="page-404-style3.html">Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Under Construction</a>
                        <ul class="dropdown">
                          <li><a href="page-under-construction-style1.html">Style1</a></li>
                          <li><a href="page-under-construction-style2.html">Style2</a></li>
                          <li><a href="page-under-construction-style3.html">Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Coming Soon</a>
                        <ul class="dropdown">
                          <li><a href="page-coming-soon-style1.html">Style1</a></li>
                          <li><a href="page-coming-soon-style2.html">Style2</a></li>
                          <li><a href="page-coming-soon-style3.html">Style3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Campaigns<span class="label label-warning">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Boxed</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-boxed-gutter-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-boxed-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-boxed-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-boxed-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-boxed-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-boxed-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-boxed-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-boxed-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-boxed-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-boxed-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-boxed-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-boxed-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-boxed-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-boxed-title-gutter-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-boxed-title-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-boxed-title-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-boxed-title-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-boxed-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-boxed-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-boxed-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-boxed-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-boxed-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-boxed-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-boxed-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-boxed-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-boxed-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Wide</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-wide-gutter-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-wide-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-wide-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>                        
                            <ul class="dropdown">
                              <li><a href="portfolio-wide-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-wide-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-wide-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-wide-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-wide-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-wide-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-wide-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-wide-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-wide-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-wide-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-wide-title-gutter-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-wide-title-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-wide-title-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter Less</a>                        
                            <ul class="dropdown">
                              <li><a href="portfolio-wide-title-1-col.html">1 Column</a></li>
                              <li><a href="portfolio-wide-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-wide-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-wide-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-wide-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-wide-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-wide-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-wide-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-wide-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-wide-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Masonry Boxed</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-boxed-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-boxed-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-boxed-gutter-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-gutter-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-boxed-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-boxed-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Masonry Wide</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-wide-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-wide-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-wide-gutter-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-gutter-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Title - Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-masonry-wide-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-masonry-wide-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Tiles Boxed</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-boxed-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-boxed-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-boxed-title-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-boxed-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-boxed-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Tiles Wide</a>
                        <ul class="dropdown">
                          <li><a href="#">Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-wide-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-wide-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-wide-title-gutter-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-gutter-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Title - Gutter Less</a>
                            <ul class="dropdown">
                              <li><a href="portfolio-tiles-wide-title-2-col.html">2 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-3-col.html">3 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-4-col.html">4 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-5-col.html">5 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-6-col.html">6 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-7-col.html">7 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-8-col.html">8 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-9-col.html">9 Columns</a></li>
                              <li><a href="portfolio-tiles-wide-title-10-col.html">10 Columns</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Loading Styles</a>
                        <ul class="dropdown">
                          <li><a href="portfolio-extra-infinity-scroll.html">Infinity Scroll</a></li>
                          <li><a href="portfolio-extra-infinity-scroll-lazyload.html">Infinity Scroll Lazyload</a></li>
                          <li><a href="portfolio-extra-pagination.html">Pagination</a></li>
                          <li><a href="portfolio-extra-jquery-pagination.html">Pagination Jquery</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Single</a>
                        <ul class="dropdown">
                          <li><a href="portfolio-details-image.html">With - Image</a></li>
                          <li><a href="portfolio-details-image-gallery.html">With - Image Gallery</a></li>
                          <li><a href="portfolio-details-video-gallery.html">With - Video Gallery</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#home">Something</a>
                    <ul class="dropdown">
                      <li><a href="page-volunteer-4column.html">Volunteer 4column</a></li>
                      <li><a href="page-volunteer-3column.html">Volunteer 3column</a></li>
                      <li><a href="page-volunteer-2column.html">Volunteer 2column</a></li>
                      <li><a href="page-volunteer-details.html">Volunteer Details</a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)">Blog</a>
                    <div class="megamenu">
                      <div class="megamenu-row">
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li>
                              <h5 class="pl-10"><strong>Classic:</strong></h5>
                            </li>
                            <li><a href="blog-classic-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="blog-classic-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="blog-classic-both-sidebar.html">Both Sidebar</a></li>
                            <li><a href="blog-classic-no-sidebar.html">No Sidebar</a></li>
                            <li><a href="blog-classic-small-thumbs.html">Small Thumbs</a></li>
                            <li>
                              <h6 class="pl-10"><strong>Extra:</strong></h6>
                            </li>
                            <li><a href="blog-timeline.html">Timeline</a></li>
                            <li><a href="blog-timeline-masonry.html">Timeline Masonry</a></li>
                            <li><a href="blog-extra-infinity-scroll.html">Infinity Scroll</a></li>
                            <li><a href="blog-extra-infinity-scroll-lazyload.html">Infinity Scroll + Lazyload</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li>
                              <h5 class="pl-10"><strong>Grid:</strong></h5>
                            </li>
                            <li><a href="blog-grid-2-column.html">2 Columns</a></li>
                            <li><a href="blog-grid-3-column.html">3 Columns</a></li>
                            <li><a href="blog-grid-4-column.html">4 Columns</a></li>
                            <li>
                              <h6 class="text-black font-weight-600 pl-10">Full Width:</h6>
                            </li>
                            <li><a href="blog-grid-width-2-column.html">2 Columns</a></li>
                            <li><a href="blog-grid-width-3-column.html">3 Columns</a></li>
                            <li><a href="blog-grid-width-4-column.html">4 Columns</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li>
                              <h5 class="pl-10"><strong>Masonry:</strong></h5>
                            </li>
                            <li><a href="blog-masonry-2-column.html">2 Columns</a></li>
                            <li><a href="blog-masonry-3-column.html">3 Columns</a></li>
                            <li><a href="blog-masonry-4-column.html">4 Columns</a></li>
                            <li>
                              <h6 class="text-black font-weight-600 pl-10">Full Width:</h6>
                            </li>
                            <li><a href="blog-masonry-width-2-column.html">2 Columns</a></li>
                            <li><a href="blog-masonry-width-3-column.html">3 Columns</a></li>
                            <li><a href="blog-masonry-width-4-column.html">4 Columns</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li>
                              <h5 class="pl-10"><strong>Single:</strong></h5>
                            </li>
                            <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="blog-single-both-sidebar.html">Both Sidebar</a></li>
                            <li><a href="blog-single-no-sidebar.html">No Sidebar</a></li>
                            <li>
                              <h6 class="text-black font-weight-600 pl-10">Comments Plugins:</h6>
                            </li>
                            <li><a href="blog-single-facebook-comments.html#comments">Facebook Comments</a></li>
                            <li><a href="blog-single-disqus-comments.html#comments">Disqus Comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="javascript:void(0)">Something</a>
                    <div class="megamenu">
                      <div class="megamenu-row">
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li>
                              <h5 class="pl-10"><strong>Quick Links:</strong></h5>
                            </li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Donor Privacy Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright Notice</a></li>
                            <li><a href="#">Media Center</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Donor Privacy Policy</a></li>
                          </ul>
                        </div>
                        <div class="col5">
                          <h5 class=""><strong>Featured News:</strong></h5>
                          <article class="post clearfix">
                            <div class="entry-header">
                              <div class="post-thumb"> <img class="img-responsive" src="http://placehold.it/360x220" alt=""> </div>
                              <h4 class="entry-title"><a href="#">Bankruptcy Rights Proceedings</a></h4>
                            </div>
                            <div class="entry-content">
                              <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua</p>
                              <a class="btn btn-default btn-xs" href="#">read more..</a> </div>
                            </article>
                          </div>
                          <div class="col4">
                            <h5 class=""><strong>Latest News:</strong></h5>
                            <div class="list-dashed">
                              <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/75x75"></a>
                                <div class="post-right">
                                  <h5 class="post-title mt-0"><a href="#">Bankruptcy Rights Proceedings</a></h5>
                                  <p>Oct 23, 2015</p>
                                </div>
                              </article>
                              <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/75x75"></a>
                                <div class="post-right">
                                  <h5 class="post-title mt-0"><a href="#">Assertive and Persistent Advocacy</a></h5>
                                  <p>Jun 23, 2015</p>
                                </div>
                              </article>
                              <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/75x75"></a>
                                <div class="post-right">
                                  <h5 class="post-title mt-0"><a href="#">Government Contracts Procurement</a></h5>
                                  <p>Apr 15, 2015</p>
                                </div>
                              </article>
                              <article class="post media-post clearfix pb-0 mb-10"> <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/75x75"></a>
                                <div class="post-right">
                                  <h5 class="post-title mt-0"><a href="#">Criminal Defence Advocacy</a></h5>
                                  <p>Mar 08, 2015</p>
                                </div>
                              </article>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="pull-right hidden-sm hidden-xs">
                    <li>
                      <a class="btn btn-colored btn-flat btn-theme-colored mt-15" href="logout.php" >Log Out</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
      </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="job-overview">
              <dl class="dl-horizontal">
                <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <p>Wallet Balance</p>
                  <h5 class="mt-0">$ <?php echo $row['walletbal'] ?></h5>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <p>Last Transaction Amount</p>
                  <h5 class="mt-0">$ <?php echo $row['walletbal'] ?></h5>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <p>Campaing Name</p>
                  <h5 class="mt-0">Hockey Village India</h5>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <h5 class="mt-0">Salary:</h5>
                  <p>$10000 - 13000</p>
                </dd>
              </dl>
              <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#myModal" href="#">Apply Now</a>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Apply Now</h3>
                    <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_name">Name <small>*</small></label>
                            <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_email">Email <small>*</small></label>
                            <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                          </div>
                        </div>
                      </div>
                      <div class="row">               
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_sex">Sex <small>*</small></label>
                            <select id="form_sex" name="form_sex" class="form-control required">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_post">Job Post <small>*</small></label>
                            <select id="form_post" name="form_post" class="form-control required">
                              <option value="Finance Manager">Finance Manager</option>
                              <option value="Area Manager">Area Manager</option>
                              <option value="Country Manager">Country Manager</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="form_message">Message <small>*</small></label>
                        <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="form_attachment">C/V Upload</label>
                        <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                        <small>Maximum upload file size: 12 MB</small>
                      </div>
                      <div class="form-group">
                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                      </div>
                    </form>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                      $("#job_apply_form").validate({
                        submitHandler: function(form) {
                          var form_btn = $(form).find('button[type="submit"]');
                          var form_result_div = '#form-result';
                          $(form_result_div).remove();
                          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                          var form_btn_old_msg = form_btn.html();
                          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                          $(form).ajaxSubmit({
                            dataType:  'json',
                            success: function(data) {
                              if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
                              }
                              form_btn.prop('disabled', false).html(form_btn_old_msg);
                              $(form_result_div).html(data.message).fadeIn('slow');
                              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                            }
                          });
                        }
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="icon-box mb-0 p-0">
              <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                <i class="pe-7s-users"></i>
              </a>
              <h3 class="icon-box-title pt-15 mt-0 mb-40"><?php echo $row['name'] ?></h3>
              <hr>
              <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
              <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla.</p>
            </div>
            <h5 class="mt-30">Requirments:</h5>
            <ul class="list theme-colored">
              <li>Lorem ipsum dolor sit elit</li>
              <li>Lorem ipsum dolor sit amet</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<section class="bg-lightest">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 wow fadeInLeft animation-delay6">
        <h4 class="text-uppercase line-bottom mt-0">My Spnosered  Project</h4>
        <div class="featured-project-carousel owl-nav-top">
          <div class="item">
            <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="images/rose.JPG">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="85"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Rose:</strong></span>  To hire a full-time faculty and 2 mobilization resources.</p>
                <div class="donate-details">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <ul class="pull-right list-inline mt-15">
                   <li>Raised: &#8377; 1890</li>
                   <li>Goal: &#8377; 2500</li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="item">
          <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
            </div>
            <div class="progress-item mt-0">
              <div class="progress mb-0">
                <div class="progress-bar" data-percent="85"></div>
              </div>
            </div>
            <div class="causes-details clearfix border-bottom p-15 pt-10">
              <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
              <div class="donate-details">
               <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
               <ul class="pull-right list-inline mt-15">
                 <li>Raised: $1890</li>
                 <li>Goal: $2500</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="item">
        <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
          <div class="thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/360x195">
          </div>
          <div class="progress-item mt-0">
            <div class="progress mb-0">
              <div class="progress-bar" data-percent="85"></div>
            </div>
          </div>
          <div class="causes-details clearfix border-bottom p-15 pt-10">
            <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo.</p>
            <div class="donate-details">
             <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
             <ul class="pull-right list-inline mt-15">
               <li>Raised: $1890</li>
               <li>Goal: $2500</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
<div class="col-sm-12 col-md-4 wow fadeInRight animation-delay6">
  <h4 class="text-uppercase line-bottom mt-0">Insteresed In</h4>
  <div class="bxslider bx-nav-top">
    <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
      <div class="row">
        <div class="col-xs-3 p-0">
          <div class="thumb pl-15">
            <img alt="..." src="http://placehold.it/75x75" class="media-object">
          </div>
        </div>
        <div class="col-xs-6 p-0 pl-15">
          <div class="event-content">
            <h5 class="media-heading text-uppercase"><a href="#">Sports and Education for a better future!</a></h5>
            <ul>
              <li>Needs around 6lacs for help in building a classroom and for a water purifier</li>
              <li> <i class="fa fa-map-marker"></i>Hockey Village India</li>
            </ul>                    
          </div>                
        </div>
        <div class="col-xs-3 pr-0">
          <div class="event-date text-center">
            <ul>
              <li class="font-36 text-theme-colored font-weight-700"> &#8377;</li>
              <li class="font-20 text-center text-uppercase"> 40000</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
</section>
    <!-- Footer -->
    <footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
      <div class="container pb-20">
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark"> <img alt="" src="images/logo.png">
              <p class="font-12 mt-20 mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="text-gray font-12" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
              <ul class="styled-icons icon-dark mt-20">
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Projects</h5>
              <ul class="list-border list theme-colored angle-double-right">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Donor Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Copyright Notice</a></li>
                <li><a href="#">Media Center</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Quick Links</h5>
              <ul class="list-border list theme-colored angle-double-right">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Donor Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Copyright Notice</a></li>
                <li><a href="#">Media Center</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Quick Contact</h5>
              <ul class="list-border">
                <li><a href="#">+(012) 345 6789</a></li>
                <li><a href="#">hello@yourdomain.com</a></li>
                <li><a href="#" class="lineheight-20">121 King Street, Melbourne Victoria 3000, Australia</a></li>
              </ul>
              <p class="text-white mb-5 mt-15">Subscribe to our newsletter</p>
              <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                <label class="display-block" for="mce-EMAIL"></label>
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                  </span>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#footer-mailchimp-subscription-form').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                  $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
                }
              </script>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="text-white font-11 m-0">Copyright &copy;2017 Kodexlabs. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <!-- JS | Custom script for all pages -->
  <script src="js/custom.js"></script>


    </body>
    </html>