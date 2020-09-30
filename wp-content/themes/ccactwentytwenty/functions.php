<?php
if ( ! function_exists( 'ccac_2020_setup' ) ) :

function ccac_2020_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'ccac_2020', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ccac_2020' ),
        'social'  => __( 'Social Links Menu', 'ccac_2020' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // ccac_2020_setup

add_action( 'after_setup_theme', 'ccac_2020_setup' );


if ( ! function_exists( 'ccac_2020_init' ) ) :

function ccac_2020_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // ccac_2020_setup

add_action( 'init', 'ccac_2020_init' );


if ( ! function_exists( 'ccac_2020_custom_image_sizes_names' ) ) :

function ccac_2020_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'ccac_2020_custom_image_sizes_names' );
endif;// ccac_2020_custom_image_sizes_names



if ( ! function_exists( 'ccac_2020_widgets_init' ) ) :

function ccac_2020_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'ccac_2020_widgets_init' );
endif;// ccac_2020_widgets_init



if ( ! function_exists( 'ccac_2020_customize_register' ) ) :

function ccac_2020_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    // EVENT PAGES HERO CONTENT

    // THE MAIN PANEL: 
    $wp_customize->add_panel( 'event_pages_hero_content',
    array(
        'title' => __( 'Event Pages Hero Content' ),
        'description' => esc_html__( 'Adjust your Event Pages Images and Text' ), // Include html tags such as 
    ));
    // THE GENERAL SECTION: 
    $wp_customize->add_section( 'event_pages_hero_general', array(
        'title' => __( 'General Event Page Hero Content', 'ccac_2020'),
        'panel' => 'event_pages_hero_content',
        'description' => esc_html( 'Make changes to the default Events Image and Text here')
    ));

    $wp_customize->add_setting( 'event_pages_hero_general_image', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'event_pages_hero_general_image', 
    array(
        'label' => __( 'Event Pages General Hero Image'),
        'description' => esc_html__( 'Change the default image for all Event heroes'),
        'section' => 'event_pages_hero_general'
        )
    ));

    $wp_customize->add_setting( 'event_pages_hero_general_subheader', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'event_pages_hero_general_subheader', 
    array(
        'label' => __( 'Event Pages General Hero Subheader'),
        'description' => esc_html__( 'Change the default text for all Event heroes'),
        'section' => 'event_pages_hero_general',
        'type' => 'text'
    ));

    // THE COMMUNITY SECTION: 
    $wp_customize->add_section( 'event_pages_hero_submit', array(
        'title' => __( 'Submit Event Page Hero Content', 'ccac_2020'),
        'panel' => 'event_pages_hero_content',
        'description' => esc_html( 'Make changes to the submit Events Image and Text here')
    ));

    $wp_customize->add_setting( 'event_pages_hero_submit_image', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'event_pages_hero_submit_image', 
    array(
        'label' => __( 'Submit Event Pages Hero Image'),
        'description' => esc_html__( 'Change the default image for Submit Event heroes'),
        'section' => 'event_pages_hero_submit'
        )
    ));

    $wp_customize->add_setting( 'event_pages_hero_submit_subheader', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'event_pages_hero_submit_subheader', 
    array(
        'label' => __( 'Submit Event Pages Hero Subheader'),
        'description' => esc_html__( 'Change the default text for all Event heroes'),
        'section' => 'event_pages_hero_submit',
        'type' => 'text'
    ));

    // THE MY EVENTS SECTION: 
    $wp_customize->add_section( 'event_pages_hero_my_events', array(
        'title' => __( 'My Events Page Hero Content', 'ccac_2020'),
        'panel' => 'event_pages_hero_content',
        'description' => esc_html( 'Make changes to the My Events  Image and Text here')
    ));

    $wp_customize->add_setting( 'event_pages_hero_my_events_image', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'event_pages_hero_my_events_image', 
    array(
        'label' => __( 'My Events Pages Hero Image'),
        'description' => esc_html__( 'Change the default image for My Events heroes'),
        'section' => 'event_pages_hero_my_events'
        )
    ));

    $wp_customize->add_setting( 'event_pages_hero_my_events_subheader', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control( 'event_pages_hero_my_events_subheader', 
    array(
        'label' => __( 'My Events Pages Hero Subheader'),
        'description' => esc_html__( 'Change the default text for all Event heroes'),
        'section' => 'event_pages_hero_my_events',
        'type' => 'text'
    ));
    
    // FOOTER SETTINGS (CAN DELETE) 
    $wp_customize->add_section( 'footer_settings', array(
        'title' => __( 'Footer Settings', 'ccac_2020' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'home_ec_block_heading', array(
        'type' => 'theme_mod',
        'default' => __( 'A SUBTITLE', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'home_ec_block_heading', array(
        'label' => __( 'Home EC Block Heading', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'home_hero'
    ));

    $wp_customize->add_setting( 'home_ec_block_content', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non diam auctor, vulputate nulla et, mollis ligula. In a blandit sem. Vestibulum quis fringilla justo, a pharetra purus. Vivamus lorem purus, vehicula at congue sed, luctus eget dolor.', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'home_ec_block_content', array(
        'label' => __( 'Home EC Block Content', 'ccac_2020' ),
        'type' => 'textarea',
        'section' => 'home_hero'
    ));

    $wp_customize->add_setting( 'footer_settings_donate_widget_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Donate', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_donate_widget_title', array(
        'label' => __( 'Title for Donate Widget', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_donate_widget_content', array(
        'type' => 'theme_mod',
        'default' => 'CCAC is a volunteer-run 501(c)(3) nonprofit that empowers Chicago’s cultural spaces to become more accessible to visitors with disabilities.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_donate_widget_content', array(
        'label' => __( 'Content for Donate Widget', 'ccac_2020' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_donate_widget_button_title', array(
        'type' => 'theme_mod',
        'default' => __( 'DONATE TODAY', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_donate_widget_button_title', array(
        'label' => __( 'Title for Donate Widget Button', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_donate_widget_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_donate_widget_button_link', array(
        'label' => __( 'Link for Donate Widget Button', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_reach_widget_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Reach Out', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_reach_widget_title', array(
        'label' => __( 'Title for Reach Out Widget', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_reach_widget_general_email_title', array(
        'type' => 'theme_mod',
        'default' => __( 'info@chicagoculturalaccess.org', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_reach_widget_general_email_title', array(
        'label' => __( 'Title for General Inquiries Email', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_reach_widget_general_email_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_reach_widget_general_email_link', array(
        'label' => __( 'Link for General Inquiries Email', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_reach_widget_equipment_loan_email_title', array(
        'type' => 'theme_mod',
        'default' => __( 'equip@chicagoculturalaccess.org', 'ccac_2020' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_reach_widget_equipment_loan_email_title', array(
        'label' => __( 'Title for Equipment Loans Email', 'ccac_2020' ),
        'type' => 'text',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_reach_widget_equipment_loan_email_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_reach_widget_equipment_loan_email_link', array(
        'label' => __( 'Link for Equipment Loans Email', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_footer_address_content', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_footer_address_content', array(
        'label' => __( 'Write Us Address', 'ccac_2020' ),
        'type' => 'textarea',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_social_link_facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_social_link_facebook', array(
        'label' => __( 'Facebook Link', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_social_link_twitter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_social_link_twitter', array(
        'label' => __( 'Twitter Link', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_social_link_instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_social_link_instagram', array(
        'label' => __( 'Instagram Link', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    $wp_customize->add_setting( 'footer_settings_youtube_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_settings_youtube_link', array(
        'label' => __( 'YouTube Link', 'ccac_2020' ),
        'type' => 'url',
        'section' => 'footer_settings'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'ccac_2020_customize_register' );
endif;// ccac_2020_customize_register


if ( ! function_exists( 'ccac_2020_enqueue_scripts' ) ) :
    function ccac_2020_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'embed' );
    wp_enqueue_script( 'embed', 'https://public.tockify.com/browser/embed.js', false, null, true);

    wp_deregister_script( 'webfont' );
    wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', false, null, false);

    wp_register_script( 'inline-script-1', '', [], '', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Roboto:100,300,300italic,regular,italic,500,700,900","Poppins:regular,500,600,700,800","Work Sans:regular,600,700,800"]  }});');

    wp_register_script( 'inline-script-2', '', [], '', false );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);');

    wp_register_script( 'inline-script-3', '', [], '', false );
    wp_enqueue_script( 'inline-script-3' );
    wp_add_inline_script( 'inline-script-3', '(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');
  ga(\'create\', \'UA-91610200-1\', \'auto\');
  ga(\'send\', \'pageview\');');

    wp_deregister_script( 'installpopupbutton' );
    wp_enqueue_script( 'installpopupbutton', 'https://donorbox.org/install-popup-button.js', false, null, false);

    wp_register_script( 'inline-script-4', '', [], '', false );
    wp_enqueue_script( 'inline-script-4' );
    wp_add_inline_script( 'inline-script-4', 'window.DonorBox = { widgetLinkClassName: \'custom-dbox-popup\' }');

    wp_deregister_script( 'jqueryafdd' );
    wp_enqueue_script( 'jqueryafdd', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7694e31a5b6b0c04a48342', false, null, true);

    wp_deregister_script( 'webflow' );
    wp_enqueue_script( 'webflow', get_template_directory_uri() . '/js/webflow.js', false, null, true);

    wp_deregister_script( 'show-hide' );
    wp_enqueue_script( 'show-hide', get_template_directory_uri() . '/js/jquery-accessible-hide-show-aria.js', false, null, true);

    wp_deregister_script( 'dbox-popup' );
    wp_enqueue_script( 'dbox-popup', get_template_directory_uri() . '/js/install-popup-button.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */
    wp_enqueue_style( 'wp-webflow-compatibility', get_template_directory_uri().'/css/wp-webflow.css', false, null);

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'webflow' );
    wp_enqueue_style( 'webflow', get_template_directory_uri() . '/css/webflow.css', false, null, 'all');

    wp_deregister_style( 'ccacwebflow' );
    wp_enqueue_style( 'ccacwebflow', get_template_directory_uri() . '/css/ccac-2020.webflow.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'ccac_2020_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>