
        </main>
        <footer class="footer-container">
            <div class="footer">
                <div class="container container--foot">
                    
                    <div class="w-layout-grid grid-foot-2">
                        <div>
                            <h1 class="f-head"><?php echo get_theme_mod( 'footer_settings_reach_widget_title', __( 'Reach Out', 'ccac_2020' ) ); ?></h1>
                            <ul role="list" class="w-list-unstyled">
                                <li>
                                    <?php _e( 'General Inquiries', 'ccac_2020' ); ?>
                                </li>
                                <li class="mb-30">
                                    <a href="<?php echo get_theme_mod( 'footer_settings_reach_widget_general_email_link', 'mailto:info@chicagoculturalaccess.org' ); ?>"><?php echo get_theme_mod( 'footer_settings_reach_widget_general_email_title', __( 'info@chicagoculturalaccess.org', 'ccac_2020' ) ); ?></a>
                                </li>
                                <li>
                                    <?php _e( 'Equipment Loans', 'ccac_2020' ); ?>
                                </li>
                                <li>
                                    <a href="<?php echo get_theme_mod( 'footer_settings_reach_widget_equipment_loan_email_link', 'mailto:equip@chicagoculturalaccess.org' ); ?>"><?php echo get_theme_mod( 'footer_settings_reach_widget_equipment_loan_email_title', __( 'equip@chicagoculturalaccess.org', 'ccac_2020' ) ); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div id="w-node-05063a10caf0-3a10cac3">
                            <h1 class="f-head"><?php _e( 'Write Us', 'ccac_2020' ); ?></h1>
                            <div>
                                <?php echo get_theme_mod( 'footer_settings_footer_address_content' ); ?>
                            </div>
                        </div>
                        <div id="w-node-05063a10caf9-3a10cac3" class="flx-vlt">
                            <h1 class="f-head"><?php _e( 'Follow', 'ccac_2020' ); ?></h1>
                            <a href="<?php echo get_theme_mod( 'footer_settings_social_link_facebook', '#' ); ?>" class="link-social w-inline-block"> <div class="icon-social"></div> <div>
                                    <?php _e( 'Facebook', 'ccac_2020' ); ?>
                                </div> </a>
                            <a href="<?php echo get_theme_mod( 'footer_settings_social_link_twitter', '#' ); ?>" class="link-social w-inline-block"> <div class="icon-social"></div> <div>
                                    <?php _e( 'Twitter', 'ccac_2020' ); ?>
                                </div> </a>
                            <?php if ( get_theme_mod( 'footer_settings_social_link_instagram' ) ) : ?>
                                <a href="<?php echo get_theme_mod( 'footer_settings_social_link_instagram', '#' ); ?>" class="link-social w-inline-block"> <div class="icon-social"></div> <div>
                                        <?php _e( 'Instagram', 'ccac_2020' ); ?>
                                    </div> </a>
                            <?php endif; ?>
                            <a href="<?php echo get_theme_mod( 'footer_settings_youtube_link', '#' ); ?>" class="link-social w-inline-block"> <div class="icon-social"></div> <div>
                                    <?php _e( 'YouTube', 'ccac_2020' ); ?>
                                </div> </a>
                        </div>
                        <div class="flx-sb">
                            <h1 class="f-head"><?php _e( 'Contact Us', 'ccac_2020' ); ?></h1>
                            
                            <?php echo do_shortcode("[formidable id=3]"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfoot">
                <div class="txt-jawa">
                    <?php _e( '© COPYRIGHT 2020 // CHICAGO CULTURAL ACCESSIBILITY CONSORTIUM', 'ccac_2020' ); ?> 
                </div>
                <div>
                    <a href="http://bivinsbrothers.com" class="link-jawa"><?php _e( 'SITE BY BIVINS BROTHERS', 'ccac_2020' ); ?></a>
                </div>
            </div>
        </footer>
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
        <?php wp_footer(); ?>
    </body>
</html>