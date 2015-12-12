<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 2.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 12 Nov 2015 03:48:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{!! asset('layout03/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('layout03/css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{!! asset('layout03/css/custom-style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="{!! asset('layout03/css/style-horizontal.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">



    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{!! asset('layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{!! asset('layout03/js/plugins/chartist-js/chartist.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">

                    <ul class="left">
                      <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">
                  <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="index.html" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-email.html" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="CSSdropdown">
                            <i class="mdi-action-invert-colors"></i>
                            <span>CSS<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="UIElementsdropdown">
                            <i class="mdi-image-palette"></i>
                            <span>UI Elements<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="app-widget.html" class="cyan-text">
                            <i class="mdi-device-now-widgets"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Tablesdropdown">
                            <i class="mdi-editor-border-all"></i>
                            <span>Tables<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Forms<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Pagesdropdown">
                            <i class="mdi-social-pages"></i>
                            <span>Pages<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="eCommersdropdown">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>eCommers<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Chartsdropdown">
                            <i class="mdi-editor-insert-chart"></i>
                            <span>Charts<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>

                  </ul>
                </div>
              </nav>

                <!-- CSSdropdown -->
                <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="css-typography.html" class="cyan-text">Typography</a></li>
                  <li><a href="css-icons.html" class="cyan-text">Icons</a></li>
                  <li><a href="css-shadow.html" class="cyan-text">Shadow</a></li>
                  <li><a href="css-media.html" class="cyan-text">Media</a></li>
                  <li><a href="css-sass.html" class="cyan-text">Sass</a></li>
                </ul>

                <!-- UIElementsdropdown-->
                <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="ui-buttons.html" class="cyan-text">Buttons</a></li>
                  <li><a href="ui-badges.html" class="cyan-text">Badges</a></li>
                  <li><a href="ui-cards.html" class="cyan-text">Cards</a></li>
                  <li><a href="ui-collections.html" class="cyan-text">Collections</a></li>
                  <li><a href="ui-accordions.html" class="cyan-text">Accordian</a></li>
                  <li><a href="ui-navbar.html" class="cyan-text">Navbar</a></li>
                  <li><a href="ui-pagination.html" class="cyan-text">Pagination</a></li>
                  <li><a href="ui-preloader.html" class="cyan-text">Preloader</a></li>
                  <li><a href="ui-modals.html" class="cyan-text">Modals</a></li>
                  <li><a href="ui-media.html" class="cyan-text">Media</a></li>
                  <li><a href="ui-toasts.html" class="cyan-text">Toasts</a></li>
                  <li><a href="ui-tooltip.html" class="cyan-text">Tooltip</a></li>
                </ul>

                <!-- Tablesdropdown -->
                <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="table-basic.html" class="cyan-text">Basic Tables</a></li>
                  <li><a href="table-data.html" class="cyan-text">Data Tables</a></li>
                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="form-elements.html" class="cyan-text">Form Elements</a></li>
                  <li><a href="form-layouts.html" class="cyan-text">Form Layouts</a></li>
                </ul>

                <!-- Pagesdropdown -->
                <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">

                    <li><a href="page-invoice.html" class="cyan-text">Invoice</a></li>
                    <li><a href="page-404.html" class="cyan-text">404</a></li>
                    <li><a href="page-500.html" class="cyan-text">500</a></li>
                    <li><a href="page-blank.html" class="cyan-text">Blank</a></li>
                </ul>

                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
                    <li><a href="eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
                    <li><a href="eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Mediasdropdown -->
                <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
                    <li><a href="media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
                </ul>

                <!-- Chartsdropdown -->
                <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="charts-chartjs.html" class="cyan-text">Chart JS</a></li>
                    <li><a href="charts-chartist.html" class="cyan-text">Chartist</a></li>
                    <li><a href="charts-morris.html" class="cyan-text">Morris Charts</a></li>
                    <li><a href="charts-xcharts.html" class="cyan-text">xCharts</a></li>
                    <li><a href="charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
                    <li><a href="charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->



    @yield('content')



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">World Market</h5>
                    <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
                    <div id="world-map-markers"></div>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Sales by Country</h5>
                    <p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
                    <div id="polar-chart-holder">
                        <canvas id="polar-chart-country" width="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{!! asset('layout03/js/jquery-1.11.2.min.js') !!}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{!! asset('layout03/js/materialize.js') !!}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}"></script>


    <!-- chartist -->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/chartist-js/chartist.min.js') !!}"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/chartjs/chart.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/chartjs/chart-script.js') !!}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/sparkline/sparkline-script.js') !!}"></script>

    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/vectormap-script.js') !!}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins.js') !!}"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });

    $(function() {
      // Google Maps
      $('#map-canvas').addClass('loading');
      var latlng = new google.maps.LatLng(40.6700, -73.9400); // Set your Lat. Log. New York
      var settings = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false,
          scrollwheel: false,
          draggable: true,
          styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}],
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: false,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), settings);

      google.maps.event.addDomListener(window, "resize", function() {
          var center = map.getCenter();
          google.maps.event.trigger(map, "resize");
          map.setCenter(center);
          $('#map-canvas').removeClass('loading');
      });

      var contentString =
          '<div id="info-window">'+
          '<p>18 McLuice Road, Vellyon Hills,<br /> New York, NY 10010<br /><a href="https://plus.google.com/102896039836143247306/about?gl=za&hl=en" target="_blank">Get directions</a></p>'+
          '</div>';
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });

      var companyImage = new google.maps.MarkerImage('../../../ashoka/images/map-marker.png',
          new google.maps.Size(36,62),// Width and height of the marker
          new google.maps.Point(0,0),
          new google.maps.Point(18,52)// Position of the marker
      );

      var companyPos = new google.maps.LatLng(40.6700, -73.9400);

      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Shapeshift Interactive",
          zIndex: 3});

      google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
          pageView('http://demo.geekslabs.com/#address');
      });
    });

    </script>
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout03/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 12 Nov 2015 03:49:34 GMT -->
</html>