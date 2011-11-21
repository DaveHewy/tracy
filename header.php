<?php
/**
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage Barebones
 * @since Barebones
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '&laquo;', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );
	
	// Include our jQuery library
	wp_enqueue_script("jquery"); 

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " &laquo; $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' &laquo; ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php		
		wp_head();
	?>

<script type="text/javascript">
jQuery(function(){jQuery("#menu ul.menu ul").css({display:'none'});jQuery("#menu ul.menu li").hover(function(){jQuery(this).find('ul.sub-menu').stop(true,true).delay(50).animate({"height":"show","opacity":"show"},200);},function(){jQuery(this).find('ul.sub-menu').stop(true,true).delay(50).animate({"height":"hide","opacity":"hide"},200);});});
</script>	

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    
  </head>

<body>

<div id="page">
<?php  //wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>