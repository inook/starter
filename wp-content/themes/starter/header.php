<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?></title>

	<!-- WORDPRESS -->
	<?php wp_head(); ?>

	<!-- CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/style.min.css">

  <!-- HTML5 for IE -->
  <!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

	<!-- META Facebook -->
	<meta property="og:title" content="<?php echo get_option( 'fb_title' ); ?>" />
  <meta property="og:site_name" content="<?php echo get_option( 'fb_site_name' ); ?>" />
  <meta property="og:description" content="<?php echo get_option( 'fb_description' ); ?>" />
  <meta property="og:url" content="<?php bloginfo('url'); ?>" />
  <meta property="og:image" content="<?php echo get_option( 'fb_image' ); ?>" />
  <meta property="og:type" content="website" />

	<!-- META G+	-->
	<meta itemprop="name" content="<?php echo get_option( 'g_title' ); ?>" />
  <meta itemprop="description" content="<?php echo get_option( 'g_description' ); ?>" />
  <meta itemprop="image" content="<?php echo get_option( 'g_image' ); ?>" />


	<!-- META Twitter	-->
	<meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo get_option( 'tw_title' ); ?>" />
  <meta name="twitter:description" content="<?php echo get_option( 'tw_description' ); ?>" />
  <meta name="twitter:site" content="<?php echo get_option( 'tw_compte' ); ?>" />
  <meta name="twitter:url" content="<?php bloginfo('url'); ?>" />
  <meta name="twitter:image" content="<?php echo get_option( 'tw_image' ); ?>" />


</head>

<body <?php body_class();?> >

	<!-- Navigation -->
	<nav class="main-nav">

		<div class="nav-inner">

			<!-- Close -->
			<div class="nav-close">
				<span class="line line-1"></span>
				<span class="line line-2"></span>
			</div>

			<!-- Menu -->
			<?php

			$args = array(
			'theme_location'  => 'menu_principal',
			'container'       => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
			);

			wp_nav_menu( $args );

			?>

			<!-- Widget -->
			<?php dynamic_sidebar( 'menu-1' ); ?>


		</div>

	</nav>

	<!-- Masque content -->
	<div class="hide-content">
	</div>

	<div class="site-container">

		<header>

			<div class="row">

				<!-- LOGO -->
				<div class="logo">
					<strong>LOGO</strong>
				</div>

				<!-- MENU -->
				<div class="nav-button">

							<div class="nav-title">
								MENU
							</div>

							<div class="nav-icon">
								<span class="line line-1"></span>
								<span class="line line-2"></span>
								<span class="line line-3"></span>
							</div>

				</div>

			</div>

		</header>
