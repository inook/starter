<?php get_header() ?>

<!-- Content -->

<article>

  <div class="row">

    <div class="columns large-12">
      <?php the_breadcrumb(); ?>
    </div>

    <div class="columns large-12">

      <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content() ?>

      <?php } } ?>

    </div>

  </div>

</article>


<?php get_footer() ?>
