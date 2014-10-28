<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo('name'); ?></title>

	<!-- WORDPRESS -->
	<?php wp_head(); ?>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

  <!-- SCRIPT -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.1.min.js"></script>

  <!-- HTML5 for IE -->
  <!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>


<body <?php body_class();?> >

	<header>
	</header>
