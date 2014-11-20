<?php get_header() ?>

<!-- Breadcrumb -->
<div class="row">

  <div class="columns large-12">
    <?php the_breadcrumb(); ?>
  </div>

</div>


<!-- Pagination -->
<?php

$cat = get_category( get_query_var( 'cat' ) );
$cat_slug = $cat->slug;

// set up or arguments for our custom query
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$query_args = array(
  'post_type' => 'post',
  'category_name' => $cat_slug,
  'posts_per_page' => 3,
  'paged' => $paged
);
// create a new instance of WP_Query
$the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

  <article class="row">
    <div class="columns large-12">
      <h1><?php echo the_title(); ?></h1>
      <h4><?php unset($previousday);the_date(); ?></h4>
      <?php the_excerpt(); ?>
      <p><a href="<?php the_permalink(); ?>">En savoir plus</a></p>
    </div>
  </article>

<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { ?>

  <nav class="row">
    <div class="nav-prev">
      <?php echo get_next_posts_link( '&#8592; Articles précédents', $the_query->max_num_pages ); ?>
    </div>
    <div class="nav-next">
      <?php echo get_previous_posts_link( 'Articles suivants &#8594;' ); ?>
    </div>
  </nav>

  <?php } ?>

<?php else: ?>
<?php endif; ?>


<?php get_footer() ?>
