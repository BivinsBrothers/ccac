<?php
/*
 Template Name: ccac-events-template
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<div id="top" class="hero hero--int">
    <div class="hero-wrap hero-wrap--int">
        <div class="w-layout-grid grid-hero grid-hero--int">
            <div id="w-node-3fd731e44e43-7cec64b0" class="txt-align-rt txt-align-rt--int">
                <!-- This shows title and subheader if the event is a CCAC one  -->
                <?php if( is_tribe_calendar() && has_term('ccac-event', 'tribe_events_cat', get_queried_object_id()) ) : { ?>
                    <h1 class="txt-hero"><?php wp_title(' '); ?></h1>
                    <p item="date" class="subhead"><?php the_field('subheader'); ?></p>
                <?php } elseif ( tribe_is_community_edit_event_page()): { ?>
                    <h1 item="title" class="txt-hero"><?php wp_title(' '); ?></h1>
                    <p class="subhead" item="date"><?php echo get_theme_mod('event_pages_hero_submit_subheader'); ?></p>
                <?php } elseif ( tribe_is_community_my_events_page()): { ?>
                    <h1 item="title" class="txt-hero"><?php wp_title(' '); ?></h1>
                    <p class="subhead" item="date"><?php echo get_theme_mod('event_pages_hero_my_events_subheader'); ?></p>
                <?php } else :  { ?>
                    <h1 item="title" class="txt-hero"><?php wp_title(' '); ?></h1>
                    <p class="subhead" item="date"><?php echo get_theme_mod('event_pages_hero_general_subheader'); ?></p>
                <?php } endif; ?>
            </div>
        </div>
        <div class="overlay-brdr overlay-brdr--int"></div>
        <!-- Display the image if it's a CCAC Event (the trick to making this work was the third parameter with get_queried…) -->
         <?php if( is_tribe_calendar() && has_term('ccac-event', 'tribe_events_cat', get_queried_object_id()) ) : { ?>
  
                <img src="<?php the_field('event_image') ?>" alt="" class="img-bg">
        <?php } elseif ( tribe_is_community_edit_event_page()): { ?>
                <?php $image_hero_submit = get_theme_mod('event_pages_hero_submit_image');
                      $customizer_alt = get_post_meta( $image_hero_submit, '_wp_attachment_image_alt', true ); ?>
                <img src="<?php echo $image_hero_submit; ?>" alt="<?php $customizer_alt; ?>" class="img-bg">
        <?php } elseif ( tribe_is_community_my_events_page()): { ?>
                <?php $image_hero_my_events = get_theme_mod('event_pages_hero_my_events_image');
                      $customizer_alt = get_post_meta( $image_hero_my_events, '_wp_attachment_image_alt', true ); ?>
                <img src="<?php echo $image_hero_my_events; ?>" alt="<?php $customizer_alt; ?>" class="img-bg">
         <?php } elseif( tribe_is_list_view() ) : { ?>
                <?php $image_hero_list_general = get_theme_mod('event_pages_hero_general_image');
                      $customizer_alt = get_post_meta( $image_hero_list_general, '_wp_attachment_image_alt', true ); ?>
                <img src="<?php echo $image_hero_list_general; ?>" alt="<?php $customizer_alt; ?>" class="img-bg">

         <?php } else : { ?>
                <?php $image_hero_general = get_theme_mod('event_pages_hero_general_image');
                      $customizer_alt = get_post_meta( $image_hero_general, '_wp_attachment_image_alt', true ); ?>
         <img src="<?php echo $image_hero_general ?>" alt="<?php $customizer_alt; ?>" class="img-bg">

         <?php } endif; ?>
        
        <div class="grad-hero grad-hero--int"></div>
    </div>
</div>
<div class="shadow shadow--int div-block"></div>

    <?php if ( tribe_is_list_view()) : { ?>
        <section class="section">
            <div class="container">
                <div class="w-layout-grid grid-cal">
                    <h1 id="w-node-4ee0505dff64-e4a48351" class="h1-brdr">How to use the calendar</h1>
                <div>   
                    <p>Filter events by<strong data-new-link="true"> typing keywords into the search field</strong> below, or<strong data-new-link="true"> click on a keyword</strong> in an event to filter all events by that category.<br><br>Select &quot;Submit an Event&quot; to have your cultural organization&#x27;s accessible event added to the Access Calendar.  </p>
                </div><a data-ix="open-donation-popup" href="/events/community/add" id="w-node-01507b6433d8-e4a48351" class="btn btn--dk w-button">submit an event</a></div>
            </div>
        </section>
    <?php } elseif ( tribe_is_community_edit_event_page()): { ?>
        <section class="section">
            <div class="container">
                <h1 class="h1-brdr">How To Use This Form</h1>
                <p>Here is some information on how to use this form. </p>
            </div>
        </section>
    <?php } elseif ( tribe_is_community_my_events_page()): { ?>
        <section class="section">
            <div class="container">
                <h1 class="h1-brdr">Your Submitted Events </h1>
                <p>You can make changes to your events here.</p>
            </div>
        </section>
    <?php } endif; ?>

<section class="section">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper::rememberShownPost(); ?>
            <div <?php //post_class( 'container' ); ?> id="post-<?php the_ID(); ?>">

            
                    <?php the_content(); ?>
            
                
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ccac_2020' ); ?></p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>