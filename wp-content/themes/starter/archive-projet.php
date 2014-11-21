<?php get_header() ?>

<article>

  <div class="row">

    <div class="columns large-12">
      <?php the_breadcrumb(); ?>
    </div>

    <div class="columns large-12">
      <?php
      $postTypeSlug = get_post_type( $post );
      $query = new WP_Query(array (
        'post_type' =>  $postTypeSlug,
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1
      ));

      if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content() ?>
        <p><a href="<?php the_permalink(); ?>">Voir</a></p>

        <?php } } ?>

      </div>

    </div>

</article>

<?php get_footer() ?>
