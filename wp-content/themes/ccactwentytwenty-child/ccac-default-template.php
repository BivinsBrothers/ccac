<?php
/*
 Template Name: ccac-default-template
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/hero/hero-template-part'); ?>
<div class="shadow shadow--int div-block"></div>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'section' ); ?> id="post-<?php the_ID(); ?>">
            <div class="container">
                <?php the_content(); ?>
            </div>
            
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>