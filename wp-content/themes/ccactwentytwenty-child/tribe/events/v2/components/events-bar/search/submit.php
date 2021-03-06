<?php
/**
 * View: Events Bar Search Submit Input
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/components/events-bar/search/submit.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.9.10
 *
 */
?>
<button
	class="btn btn-dk"
	type="submit"
	name="submit-bar"
>
	<?php printf( esc_html__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?>
</button>
