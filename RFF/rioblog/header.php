<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rioblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:300,400" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
	    <div class="menu-toggle">
	        <div class="inner"></div>
	        <div class="inner"></div>
	        <div class="inner"></div>
	    </div>
	    <nav>
	        <ul>
	            <li><a href="/">Home</a></li>
	            <li><a href="../about.html">About</a></li>
	            <li><a href="../programmes.html">Programmes</a></li>
	            <li><a href="/news/">News</a></li>
	            <li><a href="../contact.php">Contact</a></li>
	        </ul>
	    </nav>
	</header>
	<section class="hero">
	    <div class="hero-inner">
	        <video class="" id="" autoplay="autoplay" loop="loop" muted="muted" playsinline>
	            <source src="../video/football_comp.mp4" type="video/mp4">
	            <source src="../video/football_comp.webm" type="video/webm">
	        </video>
	    </div>
	</section>
	<section class="section indent-top">
	    <div class="container">
	        <a href="index.html"><img src="../img/RFF-logo-black.png" alt="" id="logo"></a>
	    </div>
	</section>
	<hr>
