<?php
/**
 * The Header for the front page.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Flint
 */
?><!DOCTYPE html>
<!--[if lt IE 9]><html <?php language_attributes(); ?> class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $sparks_options = get_option('sparks_options');

if (isset($sparks_options['fb_app_id'])) {
	$fb_app_id = $sparks_options["fb_app_id"];
}
else {
	$fb_app_id = '';
} ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $fb_app_id; ?>";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
  
  	<nav role="navigation" class="navbar navbar-inverse">
			<h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
			<div class="navbar-inner">
				<div class="container">
                
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
                    
					<!-- Be sure to leave the brand out there if you want it shown -->
					<a class="brand" href="<?php echo home_url(); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
                    
					<div class="nav-collapse collapse">
						<?php wp_nav_menu( array( 'menu_class' => 'nav', 'container' => false, 'theme_location' => 'primary', 'walker' => new Flint_Bootstrap_Menu ) ); ?>
						<form method="get" class="navbar-search pull-right visible-desktop" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
							<input type="text" class="search-query" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Search">
						</form>
					</div><!-- .nav-collapse -->
				</div><!-- .container -->
			</div><!-- .navbar-inner -->
  	</nav><!-- .navbar -->
  
    <div id="myCarousel" class="carousel slide" >
  
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
       <div class="carousel-inner" >
    
        <div class="active item" >
        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifepointe.png" alt="Web">
          <div class="carousel-caption visible-desktop"><h3 class="container">Web Design</h3></div>
          <div class="carousel-caption hidden-desktop"><h4 class="container">Web Design</h4></div>
        </div>
        <div class="item">
        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cafedebangkok.png" alt="Print Media">
          <div class="carousel-caption visible-desktop"><h3 class="container">Print Media Design</h3></div>
          <div class="carousel-caption hidden-desktop"><h4 class="container">Print Media Design</h4></div>
        </div>
        <div class="item">
        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/220.png" alt="Logo Design">
          <div class="carousel-caption visible-desktop"><h3 class="container">Logo Design</h3></div>
          <div class="carousel-caption hidden-desktop"><h4 class="container">Logo Design</h4></div>
        </div>
        
      </div>
      
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #full-width-slider -->

	</header><!-- #masthead -->
  
<div id="mission" class="container-fluid row-fluid"><h3 class="offset1 span10"><a href="<?php home_url(); ?>">Star Verte LLC</a> is a multimedia design firm that specializes in <a href="">professional branding</a>, <a href="">effective communications</a>, and <a href="">experiential design</a></h3></div>
  
<div id="page" class="hfeed site container-fluid">

	<div id="main" class="site-main row-fluid">
