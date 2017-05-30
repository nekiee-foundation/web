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
                <li><a href="index.php">Home</a>
                 <li><a href="#">Campaigns<span class="label label-warning">New</span></a>
                    <ul class="dropdown">
                 <!-- <li><a href="HVI/campaign_desktop.php">Hockey Village India</a></li> -->
                  <li><a href="Sakhi/campaign_desktop.php">Sakhi</a></li>
                  <li><a href="Jamghat/campaign_desktop.php">Jamghat</a></li>
                  <li><a href="Rose/campaign_desktop.php">ROSE</a></li>
                  <li><a href="Sakar/campaign_desktop.php">Sakar</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Register With Us</a></li>   
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
                  <h5 class="mt-0">&#8377; <?php echo $row['walletbal'] ?></h5>
                </dd>
              </dl>
              <dl class="dl-horizontal">
                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                <dd>
                  <p>Last Transaction Amount</p>
                  <h5 class="mt-0">&#8377;<?php echo $row['walletbal'] ?></h5>
                </dd>
              </dl>
              <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#myModal" href="#">Add Money</a>
              <a class="btn btn-dark mt-20" data-toggle="modal" data-target="#userDetails" href="#">Update your details</a>
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">Apply Money</h3>
                    <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_name">Amount <small>*</small></label>
                            <input id="form_name" name="form_name" type="text" placeholder="Enter Amount" required="" class="form-control">
                          </div>
                        </div>
                      
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Add Now</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="userDetails" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
                    <h3 class="text-center text-theme-colored mb-20">My Details</h3>
                    <form id="job_apply_form" name="job_apply_form" action="includes/job.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_name">Phone Number<small>*</small></label>
                            <input id="form_name" name="form_name" type="text" placeholder="Enter Amount" required="" class="form-control">
                          </div>
                        </div>
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
                        </div>
                     
                      </div>
                      
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Update Details</button>
                      </div>
                    </form>
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
              <p class="text-gray">Hi ! <?php echo $row['name'] ?>. Wecome to Neikee Foundation.</p>
              <p class="text-gray">Neikee, aspires to be an enterprise that drives social change. 
              For us it’s literal meaning of an act of kindness is the motto that we live by everyday
                <br>Innovative campaigns aimed at addressing,engaging and finding solutions for issues plaguing humanity</p>
            </div>
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
        <h4 class="text-uppercase line-bottom mt-0">Featured Project</h4>
        <div class="featured-project-carousel owl-nav-top">
          <div class="item">
            <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="images/Rose/ROSE(2).jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="0"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Rural Organization for Social Empowerment (ROSE):</strong></span>  Technical education is already transforming millions of lives and fuelling economic growth
        across all sectors India.Introduce, inculcate and promote a spirit of education by working towards inclusive computer literacy is its main focus.</p>
                <div class="donate-details">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                 <ul class="pull-right list-inline mt-15">
                   <li>Raised: &#8377; 0</li>
                   <li>Goal: &#8377; 9,40,000 annually</li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <div class="item">
          <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="images/Jamghat/Jamghat(1).jpg">
            </div>
            <div class="progress-item mt-0">
              <div class="progress mb-0">
                <div class="progress-bar" data-percent="0"></div>
              </div>
            </div>
            <div class="causes-details clearfix border-bottom p-15 pt-10">
              <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Jamghat (a lively gathering):</strong></span>To provide an environment where street children can evolve as physically and emotionally healthy, self-dependent individuals, living a life of their choice. To use street and stage theatre to nurture self confidence in the children and build awareness in society on key social issues related to street children.</p>
              <div class="donate-details">
               <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
               <ul class="pull-right list-inline mt-15">
                 <li>Raised: &#8377; 0</li>
                 <li>Goal: &#8377; 5,70,000</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="item">
        <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
          <div class="thumb">
            <img class="img-fullwidth" alt="" src="images/Sakhi/Sakhi(13).jpg">
          </div>
          <div class="progress-item mt-0">
            <div class="progress mb-0">
              <div class="progress-bar" data-percent="0"></div>
            </div>
          </div>
          <div class="causes-details clearfix border-bottom p-15 pt-10">
            <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>SAKHI For Girls Education:</strong></span> To create safe and quality learning space where slum based girls will able to come together for building their basic educational capacities and life skills, so every girl will able to continue her school confidently with quality learning.</p>
            <div class="donate-details">
             <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
             <ul class="pull-right list-inline mt-15">
               <li>Raised: &#8377; 0</li>
               <li>Goal: &#8377; 3,90,000</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
<div class="col-sm-12 col-md-4 wow fadeInRight animation-delay6">
  <h4 class="text-uppercase line-bottom mt-0">Other Campaings</h4>
  <div class="bxslider bx-nav-top">
    <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
      <div class="row">
        Coming Soon
      </div>
    </div>

  </div>
</div>
</section>
<section id="contact">
      <div class="container pt-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Contact Us</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Wish to know more? Ping us!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                    <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                      <p>DLF City Phase – I,<br>Gurgaon,Haryana<br>India
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                    <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                      <p><br>Phone: +91 99101 77722<br>
                      <br>
                        Contact: Ankit Wanchoo

                        </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                    <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                      <p>
                      <br>
                      info@hockeyvillageindia.com <br>
                      <br><br></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="fa fa-credit-card text-theme-colored"></i></a>
                    <div class="media-body"> <strong>ACCOUNT DETAILS</strong>
                      <p>Account:
                          669002100001180<br>
                          IFSC: PUNB0669000<br>
                          branch code 6690, bank code 024<br>
                          Punjab National Bank Mahua</p>
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
    <!-- Footer -->
    <footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
      <div class="container pb-20">
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark"> <img alt="" src="images/logo.png">
              <p class="font-12 mt-20 mb-10">Spreading awareness and changing lives, forms the core of Neikee. The idea is to awaken the spirit of kindness amongst each one of us and in the process, find good Samaritans & dedicated catalysts who team up as partners in driving this social change forward. On one hand, we are working tirelessly to create a web-based crowd-funding platform that supports these campaigns while on the other, our intent also aims at channelizing corporate CSR funds directly into projects that are close to the respective corporate’s vision of social development.</p>
              <ul class="styled-icons icon-dark mt-20">
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/neikeeindia" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="https://www.twitter.com/neikeeindia" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="https://www.linkedin.com/company-beta/17963039/" data-bg-color="#A11312"><i class="fa fa-linkedin"></i></a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <ul class="list-border list theme-colored angle-double-right">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Donor Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Terms of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Quick Contact</h5>
              <ul class="list-border">
                <li><a href="#">Mobile: +91 99101 77722</a></li>
                <li><a href="#">ankit@neikee.com</a></li>
                <li><a href="#" class="lineheight-20">DLF City Phase – I, Gurgaon, Haryana</a></li>
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

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


    </body>
    </html>