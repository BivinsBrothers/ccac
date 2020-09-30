<?php get_header(); ?>

<?php get_template_part('template-parts/hero/hero-template-part'); ?>

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