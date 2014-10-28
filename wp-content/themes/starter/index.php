<?php get_header() ?>

<?php echo get_option('affichage_header'); ?>
<?php echo get_option('affichage_footer'); ?>
<!-- Language selector-->
<div class="row">
    <div class="small-12 columns">
        <p><?php wpml_languages() ?></p>
    </div>
</div>

<!-- Content -->


    <div class="row">
	<?php
    $language = ICL_LANGUAGE_CODE;
    $args = array (
        'orderby' => 'date',
        'order' => 'ASC'
    ); 
    
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <div class="small-12 large-6 columns">
                <?php
                $field_name = $language . '_article_sous_titre';
                // TEXTE
                echo '<h4>' . get_the_title() . '</h4>';
                echo '<h6>' .  get_field($field_name) .'</h6>';
                // IMAGE
                $field_name = $language . '_image_miniature';
                $image_array = get_field( $field_name);
                ?>
                <img src="<?php echo $image_array[url] ?>" alt="" />
             </div>
            <?php
             }
    }
    wp_reset_postdata();
    ?>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <?php echo get_option('text_slogan'); ?> 
        </div>
    </div>


<?php get_footer() ?>