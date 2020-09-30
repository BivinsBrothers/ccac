
    <?php if( have_rows('home_event_calendar_block') ): ?>
        <?php while( have_rows('home_event_calendar_block') ): the_row(); 

            // Get sub field values.
            $image = get_sub_field('home_event_calendar_block_image');
            $content = get_sub_field('home_event_calendar_block_content');
            $title = get_sub_field('home_event_calendar_block_title');

        ?>
        <div class="w-layout-grid grid-feat">
            <div id="w-node-841c6b45362d-8ba48358" class="bg-feat bg-feat--2">
                <div>
                    <?php echo $content; ?>
                </div>
                <div class="btn-flx">
                <?php while ( have_rows('home_event_calendar_block_buttons')) : the_row(); 
                    $button_title = get_sub_field('home_event_calendar_block_button_title');
                    $button_link = get_sub_field('home_event_calendar_block_button_link'); ?>
                    
                        <a href="<?php echo $button_link; ?>" class="btn w-button"><?php echo $button_title ?></a>
                    
                <?php endwhile;
                    ?>
                </div>
            </div>
            <div id="calendar" class="flx-feat w-node-7c834c76ce9a-8ba48358"> 
                <h3 class="head-feat"><?php echo $title; ?></h3>
                <img src="<?php echo $image['url']; ?>" alt="" class="img-bg">
                <div class="overlay-feat grad-4"></div>
            </div>

        </div>
         <?php endwhile; ?>
        <?php endif; ?>


