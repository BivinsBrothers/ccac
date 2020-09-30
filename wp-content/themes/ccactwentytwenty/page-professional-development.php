<?php get_header(); ?>

<div id="top" class="hero hero--int">
    <div class="hero-wrap hero-wrap--int">
        <div class="w-layout-grid grid-hero grid-hero--int">
            <div id="w-node-c9348daf5444-26a48355" class="txt-align-rt">
                <h1 class="txt-hero"><?php echo get_field( 'hero_block_title' ); ?></h1>
                <p class="subhead"><?php echo get_field( 'hero_block_subtitle' ); ?></p>
            </div>
        </div>
        <div class="overlay-brdr overlay-brdr--int"></div>
        <?php if ( get_field( 'hero_block_image' ) ) : 
            $image = get_field('hero_block_image');
            $alt   = $image['alt'];
            $url   = $image['url'];
            ?>
            
            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="img-bg">
        <?php endif; ?>
        <div class="grad-hero grad-hero--int"></div>
    </div>
</div>
<div class="shadow shadow--int div-block"></div>
<div class="section">
    <div class="container">
        <div class="w-layout-grid grid-3 mb-ewok">
            <h1 id="w-node-789f36b78f67-26a48355" class="h1-brdr"><?php _e( 'About CCAC Programs', 'ccac_2020' ); ?></h1>
            <p><?php _e( 'CCAC coordinates free, monthly professional development programs open to all.  While all are welcome, please note these', 'ccac_2020' ); ?> <strong data-new-link="true"><?php _e( 'workshops are geared toward cultural administrators', 'ccac_2020' ); ?></strong>.</p>
            <p><?php _e( 'There is no membership to CCAC. Our workshops are  &quot;safe spaces&quot; where everyone can speak freely and openly with the intention of growing and learning together.', 'ccac_2020' ); ?></p>
            <p><?php _e( 'The CCAC Steering Committee sets the schedule and coordinates the programs. Feedback and program ideas are always welcome: email', 'ccac_2020' ); ?> <a href="#"><?php _e( 'info@ChicagoCulturalAccess.org', 'ccac_2020' ); ?></a>.</p>
        </div>
    </div>
</div>
<div class="section section-feat">
    <div class="container">
        <h1 class="h1-brdr mb-jedi"><?php _e( 'Upcoming Programs', 'ccac_2020' ); ?></h1>
        <div class="w-layout-grid grid-feat mb-jedi">
            <div id="calendar" class="flx-feat flx-feat--prog w-node-020eee6f68d5-26a48355">
                <div class="date-lg">
                    <?php _e( '04.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '17.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '2020.', 'ccac_2020' ); ?>
                </div>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319.JPG" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-500x375.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-800x600.jpeg 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-1080x810.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319-p-1600x1200.jpeg 1600w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/IMG_0319.JPG 4032w" sizes="(max-width: 991px) 90vw, 80vw" alt="" class="img-bg">
                <div class="overlay-feat grad-4"></div>
            </div>
            <div id="w-node-020eee6f68da-26a48355" class="bg-feat bg-feat--1">
                <div class="w-layout-grid grid-prog-detail">
                    <h2 item="title" id="w-node-245cb9fcbff8-26a48355" class="head-prog"><?php _e( 'What Blindness Brings to Art: Talk by Georgina Kleege', 'ccac_2020' ); ?></h2>
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcbffc-26a48355" class="txt-prog">
                        <?php _e( 'Edlis Neeson Theater, Museum of Contemporary Art, Chicago', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcc000-26a48355" class="txt-prog">
                        <?php _e( 'April 17, 2020', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-245cb9fcc004-26a48355" class="txt-prog">
                        <?php _e( '3:30 PM - 5 PM', 'ccac_2020' ); ?>
                    </div>
                    <div id="w-node-245cb9fcc006-26a48355" data-w-id="8d0c2cc5-f61c-768e-dc56-245cb9fcc006" style="opacity:0" class="div-dash"></div>
                    <p item="content" id="w-node-245cb9fcc007-26a48355" class="mb-30"><?php _e( 'Join us as Georgina recounts successful and collaborative projects with cultural spaces from her personal archive.', 'ccac_2020' ); ?></p>
                    <a id="w-node-245cb9fcc009-26a48355" href="#" class="btn w-button"><?php _e( 'LEARN MORE', 'ccac_2020' ); ?></a>
                </div>
            </div>
        </div>
        <div class="w-layout-grid grid-feat mb-jedi">
            <div id="calendar" class="flx-feat flx-feat--prog w-node-105afe5e2740-26a48355">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6-p-1080x718.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6.jpg 1400w" sizes="(max-width: 991px) 90vw, 80vw" alt="" class="img-bg">
                <div class="overlay-feat grad-2"></div>
                <div class="date-lg">
                    <?php _e( '03.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '03.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '2020', 'ccac_2020' ); ?>
                </div>
            </div>
            <div id="w-node-105afe5e2743-26a48355" class="bg-feat bg-feat--1">
                <div class="w-layout-grid grid-prog-detail">
                    <h2 id="w-node-105afe5e2745-26a48355" class="head-prog"><?php _e( 'CCAC Social at the American Writers Museum', 'ccac_2020' ); ?></h2>
                    <div class="icon-event"></div>
                    <div id="w-node-105afe5e2749-26a48355" class="txt-prog">
                        <?php _e( 'The Basement at Lagunitas Brewing Company', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-105afe5e274d-26a48355" class="txt-prog">
                        <?php _e( 'March 3, 2020', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-105afe5e2751-26a48355" class="txt-prog">
                        <?php _e( '5:30 PM', 'ccac_2020' ); ?>
                    </div>
                    <div id="w-node-105afe5e2753-26a48355" data-w-id="82c8c19c-af70-6e15-3116-105afe5e2753" style="opacity:0" class="div-dash"></div>
                    <p id="w-node-105afe5e2754-26a48355" class="mb-30"><?php _e( 'Show your support for CCAC, improve accessibility in Chicago&#x27;s cultural spaces, and drink beer with us!', 'ccac_2020' ); ?></p>
                    <a id="w-node-105afe5e2756-26a48355" href="#" class="btn w-button"><?php _e( 'LEARN MORE', 'ccac_2020' ); ?></a>
                </div>
            </div>
        </div>
        <div class="w-layout-grid grid-feat mb-jedi">
            <div id="calendar" class="flx-feat w-node-8392166574f5-26a48355">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6-p-1080x718.jpeg 1080w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/image-ccac6.jpg 1400w" sizes="(max-width: 991px) 90vw, 80vw" alt="" class="img-bg">
                <div class="overlay-feat grad-1"></div>
                <div class="date-lg">
                    <?php _e( '11.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '11.', 'ccac_2020' ); ?>
                </div>
                <div class="date-lg">
                    <?php _e( '2020.', 'ccac_2020' ); ?>
                </div>
            </div>
            <div id="w-node-8392166574f8-26a48355" class="bg-feat bg-feat--1">
                <div class="w-layout-grid grid-prog-detail">
                    <h2 id="w-node-8392166574fa-26a48355" class="head-prog"><?php _e( 'CCAC 2020 Annual Fundraiser', 'ccac_2020' ); ?></h2>
                    <div class="icon-event"></div>
                    <div id="w-node-8392166574fe-26a48355" class="txt-prog">
                        <?php _e( 'The Basement at Lagunitas Brewing Company', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-839216657502-26a48355" class="txt-prog">
                        <?php _e( 'November 11, 2019', 'ccac_2020' ); ?>
                    </div>
                    <div class="icon-event"></div>
                    <div id="w-node-839216657506-26a48355" class="txt-prog">
                        <?php _e( '6 - 8 PM', 'ccac_2020' ); ?>
                    </div>
                    <div id="w-node-839216657508-26a48355" data-w-id="1ad2e283-ab2d-68f6-d086-839216657508" style="opacity:0" class="div-dash"></div>
                    <p id="w-node-839216657509-26a48355" class="mb-30"><?php _e( 'Gather &#x27;round for a CCAC Social! If you&#x27;ve had some accessibility successes, please come to share what you have learned along the way!', 'ccac_2020' ); ?></p>
                    <a id="w-node-83921665750b-26a48355" href="#" class="btn w-button"><?php _e( 'LEARN MORE', 'ccac_2020' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>