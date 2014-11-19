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

</head>

<body <?php body_class();?> >

	<div class="site-container">

		<header class="row">

			<!-- LOGO -->
			<div class="columns large-3">
				<p>Logo</p>
			</div>

			<!-- MENU -->
			<div class="columns large-9">
				<nav class="show-for-large-only">
					<?php

					$args = array(
						'theme_location'  => 'menu_principal',
						'container'       => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
					);

					wp_nav_menu( $args );

					?>
				</nav>
			</div>

		</header>
