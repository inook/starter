
		<!-- FOOTER -->
		<footer>
			<div class="row">

				<div class="columns large-3 footer-single">

					<?php dynamic_sidebar( 'footer-1' ); ?>

				</div>

				<div class="columns large-3 footer-single">

					<?php dynamic_sidebar( 'footer-2' ); ?>

				</div>

				<div class="columns large-3 footer-single">

					<?php dynamic_sidebar( 'footer-3' ); ?>

				</div>

				<div class="columns large-3 footer-single">

					<?php dynamic_sidebar( 'footer-4' ); ?>

				</div>

			</div>
		</footer>

	</div>
	<!-- / .site-container -->

	<!-- NAVIGATION MOBILE -->
	<div class="nav-mobile">

		<!-- Bouton navigation mobile -->
		<div class="nav-mobile-bt">
			<img src="http://f.cl.ly/items/1U2c3b1215383h3a2T2r/icon-menu.svg"/>
		</div>

		<!-- Navigation mobile -->
		<div class="nav-mobile-inner">
		</div>

	</div>

	<!-- WORDPRESS FOOTER -->
	<?php wp_footer(); ?>

	<!-- SCRIPT -->
	<script src="<?php bloginfo('template_url'); ?>/src/script.min.js"></script>

</body>
</html>
