
		<!-- FOOTER -->
		<footer>
			<div class="row">

				<div class="columns large-3">

					<?php dynamic_sidebar( 'footer-1' ); ?>

				</div>

				<div class="columns large-3">

					<?php dynamic_sidebar( 'footer-2' ); ?>

				</div>

				<div class="columns large-3">

					<?php dynamic_sidebar( 'footer-3' ); ?>

				</div>

				<div class="columns large-3">

					<?php dynamic_sidebar( 'footer-4' ); ?>

				</div>

			</div>
		</footer>

	</div>
	<!-- / .site-container -->

	<!-- WORDPRESS FOOTER -->
	<?php wp_footer(); ?>

	<!-- SCRIPT -->
	<script src="<?php bloginfo('template_url'); ?>/src/script.min.js"></script>


	<!-- G Analytics -->

	<?php if ( !empty( get_option( 'analytics_id' ) ) ) {	?>

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker(<?php echo get_option( 'analytics_id' ) ?>);
		pageTracker._trackPageview();
	</script>


	<?php } ?>

</body>
</html>
