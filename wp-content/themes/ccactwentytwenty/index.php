<?php get_header(); ?>

<div id="top" class="hero">
    <div class="hero-wrap">
        <div class="w-layout-grid grid-hero">
            <div id="w-node-01645649dc5c-3ca48348" class="txt-align-rt">
                <h1 class="txt-hero"><?php echo get_field( 'hero_block_title' ); ?></h1>
                <p class="subhead"><?php echo get_field( 'hero_block_subtitle' ); ?></p>
            </div>
            <a href="<?php echo get_field( 'hero_block_button_link' ); ?>" class="btn btn--rev w-button"><?php echo get_field( 'hero_block_button_title' ); ?></a>
        </div>
        <div class="overlay-brdr"></div>
        <?php if ( get_field( 'hero_block_image' ) ) : 
            $image = get_field('hero_block_image');
            $alt   = $image['alt'];
            $url   = $image['url'];
            
            ?>
            
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="img-bg">
        <?php endif; ?>
        <div class="grad-hero"></div>
    </div>
</div>
<div class="shadow"></div>
<div id="Upcoming-Workshops" class="section">
    <div class="container">
        <?php get_template_part( 'template-parts/home/home-prof-development-block' ); ?>
    </div>
</div>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div id="Upcoming-Workshops" <?php post_class( 'section section-feat' ); ?>>
            <div class="container">
                <?php get_template_part( 'template-parts/home/home-event-calendar-template-part' ); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
<?php endif; ?>
<div id="Upcoming-Workshops" class="section section-feat">
    <div class="container">
        <?php get_template_part( 'template-parts/home/home-equipment-loans-template-part' ); ?>
    </div>
</div>            

<?php get_footer(); ?>