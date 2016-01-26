<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 2.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Morelia Hacks - 2015</title>

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



    <!-- CSS para personalizar Materialize -->
    <style>
    @media (max-width: 992px) {
        .logo-wrapper a {
            left: 60px;
        }
    }

    @media (max-width: 600px) {
        .logo-wrapper a img {
            width: 90px;
        }
    }

    @media (min-width: 601px) {
        .logo-wrapper a img {
            width: 105px;
        }
    }

    #content {
        margin-top: 0;
    }

    .card-action a:hover {
        text-decoration: underline;
    }

    .card .card-content .card-title {

        line-height: 1em;
        margin-bottom: 2em;

    }

    </style>



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
            <nav class="light-blue">
                <div class="nav-wrapper">

                    <ul class="left">
                      <!-- <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li> -->
                      <li><h1 class="logo-wrapper"><a href="{{url()}}" class="brand-logo darken-1"><img src="{!! asset('logo-morelia-hacks.png') !!}" alt="Morelia Hacks" style="margin-top: 5px;"></a> <span class="logo-text">Morelia Hacks</span></h1></li>
                    </ul>
                    <!-- <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Buscar APIs"/>
                    </div> -->
                    <ul class="right">
                        <li><a href="{{url('colaboradores')}}">Colaboradores</a></li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen hide-on-small-only"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>


        </div>
                <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <!-- <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Buscar APIs">
            </div> -->
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h3>@yield('page-title')</h3>
                <ol class="breadcrumb">
                  <li><a href="{{url()}}">Inicio</a>
                  </li>
                  <li><a href="{{url()}}">API's</a>
                  </li>
                  <li class="active">Directorio</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

    <!-- //////////////////////////////////////////////////////////////////////////// -->



    @yield('content')



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright light-blue">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">Morelia Hacks</a> Todos los derechos reservados.
                <span class="right"> Diseñado por:  <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Antonio Reyes Montufar, Juan Adrian Garcia Cid, Julio Cesar Ortega Contreras, Abraham Joel Alvarez Garcia
</a></span>
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


    @yield ('scripts')

</body>
</html>