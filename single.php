<?php get_header(); ?>

    <?php
    while (have_posts()) {
        the_post(); ?>
            <?php get_template_part( 'content-single', get_post_format() ); ?>
    <?php } ?>

<?php get_footer(); ?>