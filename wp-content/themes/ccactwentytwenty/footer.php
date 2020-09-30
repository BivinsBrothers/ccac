
        </main>
        <footer class="footer-container">
            <div class="footer">
                <div class="container containter--foot">
                    <div class="w-layout-grid grid-foot-1">
                        <div class="flx-sb">
                            <div>
                                <h1 class="f-head"><?php echo get_theme_mod( 'footer_settings_donate_widget_title', __( 'Donate', 'ccac_2020' ) ); ?></h1>
                                <div>
                                    <?php echo get_theme_mod( 'footer_settings_donate_widget_content', 'CCAC is a volunteer-run 501(c)(3) nonprofit that empowers Chicago’s cultural spaces to become more accessible to visitors with disabilities.' ); ?>
                                </div>
                            </div>
                            <a href="<?php echo get_theme_mod( 'footer_settings_donate_widget_button_link', '#' ); ?>" class="btn btn--form w-button"><?php echo get_theme_mod( 'footer_settings_donate_widget_button_title', __( 'DONATE TODAY', 'ccac_2020' ) ); ?></a>
                        </div>
                        <div class="flx-sb">
                            <h1 class="f-head"><?php _e( 'Sign Our Mailing List', 'ccac_2020' ); ?></h1>
                            <div class="txt-field">
                                <?php _e( 'Your full name…', 'ccac_2020' ); ?>
                            </div>
                            <div class="txt-field">
                                <?php _e( 'Your email, please :)', 'ccac_2020' ); ?>
                            </div>
                            <a href="#" class="btn btn--form w-button"><?php _e( 'Sign up', 'ccac_2020' ); ?></a>
                        </div>
                    </div>
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