<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name=viewport content="width=device-width, initial-scale=1">
   <link href="<?php bloginfo('template_directory'); ?>/assets/custom/css/preloader.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/animatedheader/js/modernizr.custom.js"></script>
   <link href="<?php bloginfo('template_directory'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="<?php bloginfo('template_directory'); ?>/assets/vendor/pe-icon-7-stroke/css/pe-icon-7-stroke.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="<?php bloginfo('template_directory'); ?>/assets/vendor/fontawesome/css/font-awesome.min.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="<?php bloginfo('template_directory'); ?>/assets/vendor/owl-carousel/assets/owl.carousel.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="<?php bloginfo('template_directory'); ?>/assets/custom/css/style.css" property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <?php wp_head(); ?>
</head>

<body class="boxed">
<div id="preloader"><img src="<?php bloginfo('template_directory'); ?>/assets/custom/images/preloader.gif" alt="01"></div>
<div id="wrapper" class="">
   <div id="page-content-wrapper" class="content-wrap">
      <header class="cbp-af-header toggled">
         <div class="cbp-af-inner">
            <div class="navbar navbar-default" role="navigation">
               <div class="container">
                  <div class="navbar-header">
                     <h1 class="text-center"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                     <span class="small subtitle"><span class="lined"><?php bloginfo('description'); ?></span></span>
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                  </div>
               </div>
               <div class="container">
                  <div class="bordered">
                     <nav class="collapse navbar-collapse navbar-ex1-collapse e-centered">
                        <?php 
                           wp_nav_menu( array(
                               'menu'              => 'Menu chính',
                               'theme_location'    => 'main_nav',
                               'depth'             => 2,
                               'container'         => false,
                               'container_class'   => 'collapse navbar-collapse',
                               'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'nav navbar-nav',
                               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                               'walker'            => new WP_Bootstrap_Navwalker())
                           );
                        ?>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>