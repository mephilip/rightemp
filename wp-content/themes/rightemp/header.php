<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php bloginfo("stylesheet_directory"); ?>/style.css" rel="stylesheet">
<!-- Custom Fonts -->

<a href="https://plus.google.com/108195419494219345579/" rel="publisher" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64535559-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/logo.png" alt="logo"></a></h1>
      </div>
      <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
        <div class="headerright">
          <div class="headertop">
            <div class="callus"> 
			   <?php dynamic_sidebar('phone'); ?>
            </div>
            <div class="social">
			   <?php dynamic_sidebar('social'); ?>
            </div>
          </div>
          <div class="main_menu"><!-- Begin: mainMenu --> 
             <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
           </div>
          <!-- End: mainMenu --> 
        </div>
      </div>
    </div>
  </div>
</div>
