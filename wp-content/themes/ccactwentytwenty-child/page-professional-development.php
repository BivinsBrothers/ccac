<?php get_header(); ?>

<?php get_template_part('template-parts/hero/hero-template-part'); ?>
<div class="shadow shadow--int div-block"></div>
<div class="section">
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                <div class="container">
                    <!-- <div class="w-layout-grid grid-3 mb-ewok"> -->
                        <!-- <h1 id="w-node-789f36b78f67-26a48355" class="h1-brdr">About CCAC Events</h1> -->
                        <?php the_content(); ?>
                    <!-- </div> -->
                </div>
                
            <?php endwhile; 
        endif; 
        ?>
    
</div>
<div class="section section-feat">
    <div class="container">

            <h1 class="h1-brdr mb-jedi"><?php _e( 'Upcoming Programs', 'ccac_2020' ); ?></h1>

        <?php 
            // Ensure the global $post variable is in scope
            global $post;
            // Retrieve the next 5 upcoming events
            $events = tribe_get_events( [ 
                'posts_per_page' => 5,
                'start_date'  => 'now',
                'tax_query'       => array(
                    array(
                        'taxonomy' => 'tribe_events_cat',
                        'field' => 'slug',
                        'terms' => 'ccac-event',
                    ))
                ] );
                if ( empty( $events ) ) {
                echo 'Sorry, there are no upcoming events at this time.';
                }
            // Loop through the events: set up each one as
            // the current post then use template tags to
            // display the title and content
            else foreach ( $events as $post ) {
            setup_postdata( $post );
        ?>

        <div class="w-layout-grid grid-feat mb-jedi">
            <div id="calendar" class="flx-feat flx-feat--prog w-node-020eee6f68d5-26a48355">
                <div class="date-lg">
                    <?php echo tribe_get_start_date( $post->ID, true, 'm' ) . '.'; ?>
                </div>
                <div class="date-lg">
                    <?php echo tribe_get_start_date( $post->ID, true, 'j' ) . '.'; ?>
                </div>
                <div class="date-lg">
                    <?php echo tribe_get_start_date( $post->ID, true, 'Y' ) . '.'; ?>
                </div>
                <?php
                    $color_overlay = get_field('event_image_overlay_color');
                    $image = get_field('event_image');
                    if( $color_overlay == "purple") {
                        $color = "grad-2";
                    } elseif ( $color_overlay == "green") {
                        $color = "grad-1";
                    } elseif ( $color_overlay == "blue") {
                        $color = "grad-3";
                    } else ( $color_overlay == "gray") {
                        $color = "grad-4"
                    }
                ?>

                <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319.JPG" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-500x375.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-800x600.jpeg 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-1080x810.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-1600x1200.jpeg 1600w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319.JPG 4032w" sizes="(max-width: 991px) 90vw, 80vw" alt="" class="img-bg"> -->
                <img src="<?php echo $image ?>" alt="" class="img-bg">
                <div class="overlay-feat <?php echo $color; ?>"></div>
                
            </div>
            <div id="w-node-020eee6f68da-26a48355" class="bg-feat bg-feat--1">
                <div class="w-layout-grid grid-prog-detail">
                    <h2 item="title" id="w-node-245cb9fcbff8-26a48355" class="head-prog"><?php  echo $post->post_title; ?></h2>
                    
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcbffc-26a48355" class="txt-prog">
                        <?php  echo tribe_get_venue(); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcc000-26a48355" class="txt-prog">
                        <?php echo tribe_get_start_date( $post->ID, true, 'M d, Y' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcc004-26a48355" class="txt-prog">
                        <?php echo tribe_get_start_date( $post->ID, true, 'g:ia' ); ?> to <?php echo tribe_get_end_date( $post->ID, true, 'g:ia' ); ?>
                    </div>
                    <div id="w-node-245cb9fcc006-26a48355" data-w-id="8d0c2cc5-f61c-768e-dc56-245cb9fcc006" style="opacity:0" class="div-dash"></div>
                    <p item="content" id="w-node-245cb9fcc007-26a48355" class="mb-30"><?php echo get_the_excerpt(); ?></p>
                    <a id="w-node-245cb9fcc009-26a48355" href="<?php the_permalink(); ?>" class="btn w-button"><?php _e( 'LEARN MORE', 'ccac_2020' ); ?></a>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>            

<?php get_footer(); ?>