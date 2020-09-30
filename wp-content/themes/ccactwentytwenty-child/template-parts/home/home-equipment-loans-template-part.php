
<?php if( have_rows('home_equipment_loan_block') ): ?>
    <?php while( have_rows('home_equipment_loan_block') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('home_equipment_loan_block_image');
        $content = get_sub_field('home_equipment_loan_block_content');
        $title = get_sub_field('home_equipment_loan_block_title');

    ?>
    <div class="w-layout-grid grid-feat">
        <div id="calendar" class="flx-feat w-node-7c834c76ce9a-8ba48358"> 
            <h3 class="head-feat"><?php echo $title; ?></h3>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-bg">
            <div class="overlay-feat grad-1"></div>
        </div>
        <div id="w-node-841c6b45362d-8ba48358" class="bg-feat bg-feat--2">
            <div>
                <?php echo $content; ?>
            </div>
            <div class="btn-flx">
            <?php while ( have_rows('home_equipment_loan_block_buttons')) : the_row(); 
                $button_title = get_sub_field('home_equipment_loan_block_button_title');
                $button_link = get_sub_field('home_equipment_loan_block_button_link'); ?>
                
                    <a href="<?php echo $button_link; ?>" class="btn w-button"><?php echo $button_title; ?></a>
                
            <?php endwhile;
                ?>
            </div>
        </div>


    </div>
        <?php endwhile; ?>
    <?php endif; ?>