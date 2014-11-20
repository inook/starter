<?php get_header() ?>

<!-- Content -->
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


  <nav class="row">
    <div class="nav-prev">
      <?php next_post_link( '&#8592; %link','%title' , $in_same_term = true); ?>
    </div>
    <div class="nav-next">
      <?php previous_post_link( '%link &#8594;','%title', $in_same_term = true ); ?>
    </div>
  </nav>

</div>

<?php get_footer() ?>
