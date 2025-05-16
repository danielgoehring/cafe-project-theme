<?php
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="product-page-wrapper"> <!-- NEW WRAPPER -->

    <?php while ( have_posts() ) :
        the_post();
        wc_get_template_part( 'content', 'single-product' );
    endwhile; ?>

</div> <!-- END WRAPPER -->

<?php get_footer(); ?>
