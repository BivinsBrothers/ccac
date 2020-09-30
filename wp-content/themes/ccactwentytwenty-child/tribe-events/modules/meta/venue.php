<?php
/**
 * Single Event Meta (Venue) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/venue.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 */

if ( ! tribe_get_venue_id() ) {
	return;
}

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();

?>

<div class="tribe-events-meta-group tribe-events-meta-group-venue">
	<h2 class="tribe-events-single-section-title"> <?php //esc_html_e( tribe_get_venue_label_singular(), 'the-events-calendar' ) ?> </h2>
	<dl>
		<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>
		<?php $venue = tribe_get_venue( get_the_ID() ); 
			  if ( is_null( $venue )) : { ?>
				<dd class="tribe-venue"> 
					<div class="icon-event icon-event--template"></div>
				<?php echo tribe_get_venue_link() ?>, <?php echo tribe_get_address(); ?>, <?php echo tribe_get_city(); ?> 
				</dd>
			  <?php } else : { ?>
	
			  <?php } endif; ?>
		
		
		<?php if ( tribe_address_exists() ) : ?>
			<dd class="tribe-venue-location">
				<address class="tribe-events-address">
					<?php //echo tribe_get_full_address(); ?>
					<?php //echo tribe_get_venue_link(); ?>
					<?php if ( tribe_is_past_event() ) : ?>
					<?php else : ?>
						<?php if ( tribe_show_google_map_link() ) : ?>
							<?php echo tribe_get_map_link_html(); ?>
						<?php endif; ?>
					<?php endif; ?>
				</address>
			</dd>
		<?php endif; ?>

		<?php if ( ! empty( $phone ) ): ?>
			<dt class="tribe-venue-tel-label"> <?php esc_html_e( 'Phone:', 'the-events-calendar' ) ?> </dt>
			<dd class="tribe-venue-tel"> <?php echo $phone ?> </dd>
		<?php endif ?>

		<?php if ( ! empty( $website ) ): ?>
			<dt class="tribe-venue-url-label"> <?php esc_html_e( 'Website:', 'the-events-calendar' ) ?> </dt>
			<dd class="tribe-venue-url"> <?php echo $website ?> </dd>
		<?php endif ?>

		<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
	</dl>
</div>
