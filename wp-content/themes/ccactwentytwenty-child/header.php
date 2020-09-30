<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Jun 23 2020 20:37:24 GMT+0000 (Coordinated Universal Time)  -->
<!--  Converted from HTML to WordPress with Pinegrow Theme Converter for WordPress. https://pinegrow.com/theme-converter-for-wordpress  -->
<html data-wf-page="5e7694e31a5b6bdf3ca48348" data-wf-site="5e7694e31a5b6b0c04a48342" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Webflow" name="generator">
        <meta content="Pinegrow Theme Converter for WordPress" name="generator">
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/webclip.png" rel="apple-touch-icon">
        <meta name="google-site-verification" content="8fUpYqZ1M5jG4i7cQFKCgdHt3KBstrELWMUcd5jxtFc">
        <html <?php language_attributes(); ?>>
            <style>
                img {
                image-orientation: from-image; 
                }
            </style>
        </html>
            
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            
        <?php wp_head(); ?>
        
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <header class="header-container">
            <div data-collapse="medium" data-animation="default" data-duration="400" id="nav-main" role="banner" class="nav w-nav">
                <a href="/" aria-current="page" class="brand w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-new-dk.svg" alt="CCAC Logo" class="logo-new w-hidden-small w-hidden-tiny"></a>
                <div class="donate-wrap">
                    <a id="w-node-c6cbe6b58fdd-e6b58fd8" data-w-id="14abebb2-c088-1bee-e99f-c6cbe6b58fdd" href="https://donorbox.org/donate-to-the-ccac" class="nav-wrap w-inline-block custom-dbox-popup"> DONATE 
                            <span class="hoverbar"></span> </a>
                    <a data-w-id="14abebb2-c088-1bee-e99f-c6cbe6b58fe1" href="/events/community/add" class="nav-wrap w-inline-block"> <div>
                            <?php _e( 'SUBMIT AN EVENT', 'ccac_2020' ); ?>
                        </div> <div class="hoverbar"></div> </a>
                    <div id="w-node-c6cbe6b58fe5-e6b58fd8" data-w-id="14abebb2-c088-1bee-e99f-c6cbe6b58fe5" class="menu-btn-f">
                        <div class="menu-icon-wrap">
                            <div class="top-line"></div>
                            <div class="mid-line"></div>
                            <div class="btm-line"></div>
                        </div>
                        <div class="txt-trans">
                            <?php _e( 'menu', 'ccac_2020' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navmenu-m">
                <div class="navmenu-overlay"></div>
                <div class="main-nav">
                    <div class="w-layout-grid grid-nav">
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<a id="{ID}" data-w-id="14abebb2-c088-1bee-e99f-c6cbe6b58ff0" class="navlink-wrap w-inline-block {CLASSES}" {ATTRS}> <div class="txt-nav">{TITLE}</div> <div class="nav-line"></div> </a>';
                                wp_nav_menu( array(
                                    'container' => '',
                                    'theme_location' => 'primary',
                                    'items_wrap' => '%3$s',
                                    'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div data-collapse="medium" data-animation="default" data-duration="400" id="nav-mobile" role="banner" class="nav nav-m w-nav">
                <a href="index.html" aria-current="page" class="brand w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logomark.svg" alt="" class="logo-m"></a>
                <div data-w-id="594073a0-d638-8f52-ac06-fe58cab985f9" class="menu-btn-f">
                    <div class="menu-icon-wrap">
                        <div class="top-line"></div>
                        <div class="mid-line"></div>
                        <div class="btm-line"></div>
                    </div>
                    <div class="txt-trans">
                        <?php _e( 'menu', 'ccac_2020' ); ?>
                    </div>
                </div>
            </div>


        </header>
        <main role="main" class="main">