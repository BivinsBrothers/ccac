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