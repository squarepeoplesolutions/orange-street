<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
            <div class="container">
                <div class="row">
                    <div class="two columns">
                        <a href="<?php echo home_url(); ?>" class="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
                    </div>
                    <div class="ten columns">
                        <div class="menu-toggle">
                            <div class="inner"></div>
                            <div class="inner"></div>
                            <div class="inner"></div>
                        </div>
                        <nav>
                            <?php html5blank_nav(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>