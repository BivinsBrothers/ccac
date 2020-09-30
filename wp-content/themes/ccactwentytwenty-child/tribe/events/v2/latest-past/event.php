<?php
/**
 * View: Latest Past Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/latest-past/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.1.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = [ 'event-wrap', 'event-wrap--event'];
// $container_classes['tribe-events-calendar-latest-past__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class( [ 'tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters' ], $event->ID );
?>
<div <?php tribe_classes( $container_classes ); ?>>
	<!-- <div class="container"> -->
		<div class="w-layout-grid grid-calendar wf-grid">
			<?php $this->template( 'latest-past/event/date-tag', [ 'event' => $event ] ); ?>

			<div class="tribe-events-calendar-list__event-wrapper tribe-common-g-col">
				<article <?php tribe_classes( $event_classes ) ?>>
					<?php $this->template( 'latest-past/event/featured-image', [ 'event' => $event ] ); ?>

					<div class="tribe-events-calendar-list__event-details tribe-common-g-col">

						<header class="tribe-events-calendar-list__event-header">
							<?php $this->template( 'latest-past/event/title', [ 'event' => $event ] ); ?>
							<?php $this->template( 'latest-past/event/venue', [ 'event' => $event ] ); ?>
							<?php $this->template( 'latest-past/event/date', [ 'event' => $event ] ); ?>

						</header>

						<?php $this->template( 'latest-past/event/description', [ 'event' => $event ] ); ?>
						<?php
							$posttags = get_the_tags();
							if ($posttags) {
							echo '<ul class="event-tag-wrapper">';
							foreach($posttags as $tag) {
								echo '<li>' .$tag->name. '</li>'; 
							}
							echo '</ul>';
							}
						?>
						<?php //$this->template( 'latest-past/event/cost', [ 'event' => $event ] ); ?>

					</div>
				</article>
			</div>
		</div>
	<!-- </div> -->
</div>
