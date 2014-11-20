<?php

get_header(); ?>


<!-- Content -->
<div class="row">

		<div class="columns large-12">
			<?php the_breadcrumb(); ?>
		</div>


		<?php if ( have_posts() ) : ?>

		<div class="columns large-12">
		<h1>Votre recherche : <?php echo get_search_query(); ?></h1>
		</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="columns large-12">
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
					<p><a href="<?php the_permalink() ?>">En savoir plus</a></p>
				</div>
			<?php endwhile; ?>

			<?php else : ?>
				<div class="columns large-12">
					<p>Aucun résultats</p>
				</div>

			<?php endif; ?>



</div>

<?php get_footer(); ?>
