<?php get_header(); ?>

<div id="top" class="hero hero--int">
    <div class="hero-wrap hero-wrap--int">
        <div class="w-layout-grid grid-hero grid-hero--int">
            <div id="w-node-502427ebeff9-93a48354" class="txt-align-rt txt-align-rt--int">
                <h1 class="txt-hero"><?php echo get_field( 'hero_block_title' ); ?></h1>
                <p class="subhead"><?php echo get_field( 'hero_block_subtitle' ); ?></p>
            </div>
        </div>
        <div class="overlay-brdr overlay-brdr--int"></div>
        <img src="<?php echo PG_Image::getUrl( get_field( 'hero_block_image' ), 'large' ) ?>" alt="" class="img-bg">
        <div class="grad-hero grad-hero--int"></div>
    </div>
</div>

<div class="section">
    <div class="container">
        <?php the_content(); ?>
    </div>
    <div class="container">
        <div class="w-layout-grid grid-resource">
            <h1 id="w-node-5c5b79cff885-93a48354" class="h1-brdr"><?php _e( 'Resources Across the Web', 'ccac_2020' ); ?></h1>
            <ul role="list" >
            <?php if( have_rows('web_resources') ): while( have_rows('web_resources') ): the_row();?>
                <li>
                    <a href="<?php the_sub_field('web_resource_link') ?>"><?php the_sub_field('web_resource') ?></a>
                </li>
                
            <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="section bg-ws">
    <div class="container">
        <div class="w-layout-grid grid-resource">
            <h1 id="w-node-83da65cc907f-93a48354" class="h1-brdr"><?php _e( 'Cultural Access Networks Across the U.S.', 'ccac_2020' ); ?></h1>
            <ul role="list">
            <?php if( have_rows('access_networks') ): while( have_rows('access_networks') ): the_row();?>
                <li>
                    <a href="<?php the_sub_field('access_network_link') ?>"><?php the_sub_field('access_network') ?></a>
                </li>
                
            <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="w-layout-grid grid-resource">
            <h1 id="w-node-398b9799643b-93a48354" class="h1-brdr"><?php _e( 'Downloads', 'ccac_2020' ); ?></h1>
            <ul role="list">
            <?php if( have_rows('downloads') ): while( have_rows('downloads') ): the_row();?>
                <li>
                    <a href="<?php the_sub_field('download_link') ?>"><?php the_sub_field('download') ?></a>
                </li>
                
            <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="section bg-ws">
    <div class="container">
        <div class="w-layout-grid grid-resource">
            <h1 id="w-node-c7a28e8258cb-93a48354" class="h1-brdr"><?php _e( 'Videos', 'ccac_2020' ); ?></h1>
            <ul role="list">
            <?php if( have_rows('videos') ): while( have_rows('videos') ): the_row();?>
                <li>
                    <a href="<?php the_sub_field('video_link') ?>"><?php the_sub_field('video') ?></a>
                </li>
                
            <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</div>            

<?php get_footer(); ?>