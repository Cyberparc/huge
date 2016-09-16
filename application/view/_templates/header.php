<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title style="color:blue;">Cyberparc</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Materialize CSS  -->
    <link href="<?php echo Config::get('URL'); ?>css/materialize.css" type="text/css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo Config::get('URL'); ?>css/style.css" type="text/css" rel="stylesheet">

    <!-- Font Awesome Css -->
    <link href="<?php echo Config::get('URL'); ?>css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <!-- Slider Css -->
    <link href="<?php echo Config::get('URL'); ?>css/pgwslider.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href='<?php echo Config::get('URL'); ?>css/camera.css' type='text/css' media='all'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 <style type="text/css">
            
              #MapDiv { width: 100%; height: 95%; }
			  #MapContainerDiv { padding:10px; float:left; width: 55%; height: 600px;}
			  #DirectionsContainerDiv { padding:5px; float:right; width: 40%; height: 600px;}
			  #DirectionsListDiv {overflow-y: auto; max-height:300px;}
			  ul.addressList {list-style-type:circle;}
        </style>
        <!-- Include Google Maps JS API -->
        <script  type="text/javascript"
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR48eWLpcfyXoBH5YbJvBRfdvpRfDymxo&libraries=places&sensor=false" async defer>
        </script>
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="shortcut icon" href="/favicon.png" />

        <!-- Google Analytic Tags Start -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63192728-1', 'auto');
        ga('send', 'pageview');

        </script>
        <!-- Google Analytic Tags Ends -->


    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link href="style-ie.css" rel="stylesheet" type="text/css" media="screen">
    <![endif]-->

    <!-- Events Trucking Tags Start -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-63192728-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>


<!-- ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Config::get('URL'); ?>js/ajax.js"></script>
<!-- ajax -->

</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '663677023764843',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Header -->
<header>
    <!-- Header Top Display In large and Tablet Device -->
    <div class="header-top hide-on-small-only">
        <div class="container hide-on-med-and-up">
            <div class="row">
                <div class="col l4 col m5 col s12">
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                    <!-- Dropdown -->
                    <div class="header-dropdown">
                        <!-- Dropdown Trigger -->
                        <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown'>Today <i class="mdi-navigation-arrow-drop-down"></i></a>
                        <!-- Dropdown Structure -->
                        <ul id='dropdown' class='dropdown-content'>
                          <li><a href="javascript:void(0);">Today</a></li>
                          <li><a href="javascript:void(0);">Yesterday</a></li>
                          <li><a href="javascript:void(0);">1 Week</a></li>
                          <li><a href="javascript:void(0);">1 Month</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l4 col m3 col s12">
                    <!-- Logo -->
                    <div class="logo">
                        <!-- <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a> -->
                    </div>
                </div>
                <div class="col l4 col m4 col s12 pull-right">
                    <!-- Search Button -->
                    <form class="searchbox">
                        <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                        <input type="submit" class="searchbox-submit">
                        <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                    </form>
                    <!-- LogIn Link -->
                    <a href="login.html" class="right login">Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header top Display On Mobile -->
    <div class="header hide-on-med-and-up">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col l4 col m5 col s2">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                    <div class="col l4 col m4 col s5">
                        <!-- Dropdown -->
                        <div class="header-dropdown">
                            <!-- Dropdown Trigger -->
                            <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown-mobile'>Today <i class="mdi-navigation-arrow-drop-down"></i></a>
                            <!-- Dropdown Structure -->
                            <ul id='dropdown-mobile' class='dropdown-content'>
                              <li><a href="javascript:void(0);">Today</a></li>
                              <li><a href="javascript:void(0);">Yesterday</a></li>
                              <li><a href="javascript:void(0);">1 Week</a></li>
                              <li><a href="javascript:void(0);">1 Month</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l4 col m4 col s3">
                        <!-- LogIn Link -->
                        <a href="login.html" class="login">Login</a>
                    </div>
                    <div class="col l4 col m4 col s2">
                    <!-- Search Button -->
                        <form class="searchbox">
                            <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                            <input type="submit" class="searchbox-submit">
                            <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col l4 col m4 col s12">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- <a href="index.html"><img src="images/material-logo.png" alt="Logo"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav role="navigation"  class="hide-on-small-only">
        <div class="nav-wrapper menu-category">
            <ul>
                <li>
               </li>
                <li>
            <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>index/index">Index</a>
            </li>
            <li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
            </li>
            <?php if (Session::userIsLoggedIn()) { ?>
                <li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>dashboard/index">Dashboard</a>
                </li>
                <li <?php if (View::checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>note/index">My Notes</a>
                </li>
            <?php } else { ?>
                <!-- for not logged in users -->
                <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
                </li>
                <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
                    <a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
                </li>
                  <li><a href="about.html">About</a></li>
            <?php } ?>
        </ul>

        <!-- my account -->
        <ul class="navigation right">
        <?php if (Session::userIsLoggedIn()) : ?>
            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                <a href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                <ul class="navigation-submenu">
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
                    </li>
                    <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                    </li>
                </ul>
            </li>
            <?php if (Session::get("user_account_type") == 7) : ?>
                <li <?php if (View::checkForActiveController($filename, "admin")) {
                    echo ' class="active" ';
                } ?> >
                    <a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
       
             
                <li>
               </li>

            </ul>
        </div>
    </nav>
</header>

<!-- Sidebar Navigation -->
<ul id="slide-out" class="side-nav full">
    <li class="logo-title"><a href="javascript:void(0);">Material News</a></li>
    <!-- Dropdown Menu -->
    <li class="dropdown-menu">
        <ul class="collapsible" data-collapsible="expandable">
            <li class="">
                <div class="collapsible-header waves-effect waves active"><i class="fa fa-file"></i> Home Page <i class="fa fa-angle-right"></i></div>
                <div style="display: block;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect active"><a href="index.html"><i class="fa fa-angle-right"></i> Home Page 1</a></li>
                        <li class="waves-effect"><a href="index2.html"><i class="fa fa-angle-right"></i> Home Page 2</a></li>
                        <li class="waves-effect"><a href="index3.html"><i class="fa fa-angle-right"></i> Home Page 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> News Detail<i class="fa fa-angle-right"></i></div>
                <div style="display: none;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect"><a href="news-single1.html"><i class="fa fa-angle-right"></i> News Detail 1</a></li>
                        <li class="waves-effect"><a href="news-single2.html"><i class="fa fa-angle-right"></i> News Detail 2</a></li>
                        <li class="waves-effect"><a href="news-single3.html"><i class="fa fa-angle-right"></i> News Detail 3</a></li>
                    </ul>
                </div>
            </li>
            <li class="">
                <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Category <i class="fa fa-angle-right"></i></div>
                <div style="display: none;" class="collapsible-body">
                    <ul>
                        <li class="waves-effect"><a href="index-sport.html"><i class="fa fa-angle-right"></i> Sport </a></li>
                        <li class="waves-effect"><a href="index-life.html"><i class="fa fa-angle-right"></i> Life </a></li>
                        <li class="waves-effect"><a href="index-travel.html"><i class="fa fa-angle-right"></i> Travel </a></li>
                        <li class="waves-effect"><a href="index-money.html"><i class="fa fa-angle-right"></i> Money </a></li>
                        <li class="waves-effect"><a href="index-tech.html"><i class="fa fa-angle-right"></i> Tech  </a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li class="waves-effect"><a href="shop.html"><i class="fa fa-tag"></i>Shop</a></li>
    <li class="waves-effect"><a href="catalog.html"><i class="fa fa-briefcase"></i>Catalog</a></li>
    <li class="waves-effect"><a href="product-detail.html"><i class="fa fa-plus-square"></i>product Detail</a></li>
    <li class="waves-effect"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
    <li class="waves-effect"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
    <li class="waves-effect"><a href="brand1.html"><i class="fa fa-rocket"></i>Brand Style 1</a></li>
    <li class="waves-effect"><a href="brand2.html"><i class="fa fa-plane"></i>Brand Style 2</a></li>
    <li class="waves-effect"><a href="about.html"><i class="fa fa-users"></i>About</a></li>
    <li class="waves-effect"><a href="contact1.html"><i class="fa fa-phone"></i>Contact Style 1</a></li>
    <li class="waves-effect"><a href="contact2.html"><i class="fa fa-map-marker"></i>Contact Style 2</a></li>
    <li class="waves-effect"><a href="login.html"><i class="fa fa-lock"></i>Login</a></li>
</ul>
