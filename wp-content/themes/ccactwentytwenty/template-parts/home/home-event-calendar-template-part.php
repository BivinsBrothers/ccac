<div class="w-layout-grid grid-feat">
    <div id="w-node-f3f82ab0dec2-3ca48348" class="bg-feat bg-feat--2">
        <div>
            <h2 class="txt-ewok"><?php echo get_theme_mod( 'home_ec_block_heading', __( 'A SUBTITLE', 'ccac_2020' ) ); ?></h2>
            <p class="mb-40"><?php echo get_theme_mod( 'home_ec_block_content', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non diam auctor, vulputate nulla et, mollis ligula. In a blandit sem. Vestibulum quis fringilla justo, a pharetra purus. Vivamus lorem purus, vehicula at congue sed, luctus eget dolor.', 'ccac_2020' ) ); ?></p>
        </div>
        <div class="btn-flx">
            <a href="<?php echo esc_url( get_post_type_archive_link( 'events' ) ); ?>" class="btn w-button"><?php _e( 'GO TO THE CALENDAR', 'ccac_2020' ); ?></a>
            <a href="#" class="btn w-button"><?php _e( 'SUBMIT AN EVENT', 'ccac_2020' ); ?></a>
        </div>
    </div>
    <div id="calendar" class="flx-feat w-node-f3f82ab0debd-3ca48348">
        <h1 class="head-feat"><?php _e( 'Event Calendar', 'ccac_2020' ); ?></h1>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-mock2a.jpg" alt="" class="img-bg">
        <div class="overlay-feat grad-4"></div>
    </div>
</div>