<?php
/**
 * View: Latest Past View - Single Event Date Tag
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/latest-past/event/date-tag.php
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

use Tribe__Date_Utils as Dates;

$event_week_day  = $event->dates->start_display->format_i18n( 'D' );
$event_day_num   = $event->dates->start_display->format_i18n( 'j' );
$event_day_month = $event->dates->start_display->format_i18n( 'm');
$event_day_year  = $event->dates->start_display->format_i18n( 'Y');

$event_date_attr = $event->dates->start_display->format( Dates::DBDATEFORMAT );
?>
<div id="w-node-53b1091ba806-e4a48351" class="date-wrap">
	<time datetime="<?php echo esc_attr( $event_date_attr ); ?>">
		<!-- <span class="tribe-events-calendar-list__event-date-tag-weekday"> -->
    <div class="date-cal-list">
      <?php echo esc_html( $event_day_month ); ?>.
    </div>
    <div class="date-cal-list">
			<?php echo esc_html( $event_day_num ); ?>.
		<!-- </span> -->
    </div>
		<!-- <span class="tribe-events-calendar-list__event-date-tag-daynum tribe-common-h5 tribe-common-h4--min-medium"> -->
    <div class="date-cal-list">
			<?php echo esc_html( $event_day_year ); ?>
		<!-- </span> -->
    </div>
	</time>
</div>
