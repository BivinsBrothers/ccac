<div class="w-layout-grid grid-feat">
    <?php 
        // Ensure the global $post variable is in scope
        global $post;
        
        // Retrieve the next 5 upcoming events
        $events = tribe_get_events( [ 
            'posts_per_page' => 1,
            'start_date'    => 'now',
            'tax_query'       => array(
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                    'terms' => 'ccac-event',
                ))
            ] );
        
        // Loop through the events: set up each one as
        // the current post then use template tags to
        // display the title and content
        foreach ( $events as $post ) {
        setup_postdata( $post );
    ?>
    <?php
        

    ?>        
        <div id="calendar" class="flx-feat w-node-cb09d261d73b-3ca48348">
            <h1 class="head-feat"><?php _e( 'Professional Development', 'ccac_2020' ); ?></h1>
            
            <img src="<?php the_field('event_image') ?>" alt="" class="img-bg">
            <div class="overlay-feat grad-2"></div>
        </div>
        <div id="w-node-b34c93830d51-3ca48348" class="bg-feat bg-feat--1">
            <div>
                <div class="date">
                    <?php echo tribe_get_start_date( $post->ID, true, 'm/j/Y' ); ?>
                </div>
                <h2 custom-field="event_title" class="txt-wookie"><?php echo get_the_title(); ?></h2>
                <p custom-field="event_description" class="mb-40"><?php echo get_the_excerpt(); ?></p>
            </div>
            <a href="/professional-development" class="btn w-button"><?php _e( 'LEARN MORE', 'ccac_2020' ); ?></a>
        </div>
        </div>
    <?php } ?>