<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <?php get_template_part('template-parts/hero/hero-template-part'); ?>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
<?php endif; ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <?php get_template_part( 'template-parts/about-us/mission-template-part' ); ?>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
<?php endif; ?>
<?php get_template_part( 'template-parts/about-us/co-chairs-template-part' ); ?>
<?php get_template_part( 'template-parts/about-us/committee-members-template-part' ); ?>
<div class="w-layout-grid">
    <?php get_template_part( 'template-parts/about-us/founding-co-chairs-template-part' ); ?>
    <?php get_template_part( 'template-parts/about-us/emeriti-template-part' ); ?>
</div>


<?php get_footer(); ?>