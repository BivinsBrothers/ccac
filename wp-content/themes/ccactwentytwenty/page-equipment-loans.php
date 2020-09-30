<?php get_header(); ?>

<div id="top" class="hero hero--int">
    <div class="hero-wrap hero-wrap--int">
        <div class="w-layout-grid grid-hero grid-hero--int">
            <div id="w-node-354870ecf02b-8ba48358" class="txt-align-rt">
                <h1 class="txt-hero"><?php echo get_field( 'hero_block_title' ); ?></h1>
                <p class="subhead"><?php echo get_field( 'hero_block_subtitle' ); ?></p>
            </div>
        </div>
        <div class="overlay-brdr overlay-brdr--int"></div>
        <?php if ( get_field( 'hero_block_image' ) ) :
            $image = get_field('hero_block_image');
            $alt   = $image['alt'];
            $url   = $image['url'];
            
            ?>
            
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="img-bg">
        <?php endif; ?>
        <div class="grad-hero grad-hero--int"></div>
    </div>
</div>
<div class="shadow shadow--int div-block"></div>
<div class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php PG_Helper::rememberShownPost(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <div class="w-layout-grid grid-2 mb-ewok">
                        <h1 id="w-node-782c9a0410fc-8ba48358" class="h1-brdr"><?php _e( 'About the Equipment Loans Program', 'ccac_2020' ); ?></h1>
                        <p><?php _e( 'To support cultural organizations as they grow their audience, CCAC is pleased to offer short-term accessible equipment loans to Chicago-area cultural organizations. The CCAC Accessible Equipment Loan Program is made possible in part by the PERT Foundation and', 'ccac_2020' ); ?> <a href="http://www.heathfund.org" target="_blank"><?php _e( 'Michael and Mona Heath Fund', 'ccac_2020' ); ?></a><?php _e( '. Special thanks to Chicago Academy of Sciences / Peggy Notebaert Nature Museum.', 'ccac_2020' ); ?><br></p>
                        <p><?php _e( 'Nonprofit cultural organizations in the Chicago area may email equipment requests or questions to', 'ccac_2020' ); ?> <a href="mailto:equip@chicagoculturalaccess.org"><?php _e( 'equip@chicagoculturalaccess.org', 'ccac_2020' ); ?></a><?php _e( ', and can expect to receive detailed instructions for next steps, including an orientation training for first-time borrowers. Please note: emailing a request does not guarantee use of the equipment.', 'ccac_2020' ); ?><br></p>
                        <h2 id="w-node-16718af2a229-8ba48358"><?php _e( 'The following equipment is available to borrow at no charge to nonprofit arts and cultural organizations in the Chicago area:', 'ccac_2020' ); ?></h2>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
        <?php endif; ?>
        <?php get_template_part( 'template-parts/equipment-loans/stationary-audio-description-kit-template-part' ); ?>
        <?php get_template_part( 'template-parts/equipment-loans/stationary-assistive-listening-system-template-part' ); ?>
        <?php get_template_part( 'template-parts/equipment-loans/portable-fm-system-template-part' ); ?>
        <?php get_template_part( 'template-parts/equipment-loans/diy-captioning-equipment-template-part' ); ?>
    </div>
</div>            

<?php get_footer(); ?>