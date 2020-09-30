<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// remove_filter('the_content', 'wpautop');

// KEEP EDITOR FROM GOING INTO FULL SCREEN MODE
if (is_admin()) {
    function jba_disable_editor_fullscreen_by_default() {
    $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
    wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default' );
}

// REGISTER ALL BLOCKS

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a gray background block.
        acf_register_block_type(array(
            'name'              => 'bg_gray',
            'title'             => __('Gray Background'),
            'description'       => __('All content on this block will have a gray background.'),
            'render_template'   => 'template-parts/blocks/backgrounds/block_bg_gray.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'backgrounds', 'content' ),
        ));
    }
}

// DONORBOX THING
function ple_hook_javascript() {
  ?>
  <script type="text/javascript" defer src="https://donorbox.org/install-popup-button.js"></script>
  <script>window.DonorBox = { widgetLinkClassName: 'custom-dbox-popup' }</script>
  <?php
}

add_action( 'wp_head', 'ple_hook_javascript' );

// CHANGING THE EVENTS CALENDAR PAGE TITLES
function biv_change_events_title( $title ){
	if( is_tax() ){
		return $title;
	} else {
		return __( 'Access Calendar', 'texdomain' );
	}
}
add_filter( 'tribe_get_events_title', 'biv_change_events_title' );

// REMOVE CONTENT EDITOR FROM PAGES 

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $pagetitle = get_the_title($post_id);
  if($pagetitle == 'Home'){
    remove_post_type_support('page', 'editor');
  }
}

// IS TRIBE? 
function is_tribe_calendar() { // detect if we're on an Events Calendar page
	if (tribe_is_event() || tribe_is_event_category() || tribe_is_in_main_loop() || tribe_is_view() || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' ))
		return true;
	else return false;
}


// CUSTOMIZER ADDITIONS

require get_template_directory() . '/inc/customizer.php';


 ?>
