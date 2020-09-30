<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

	<div id="tribe-events-content" class="tribe-events-single">

	<p class="tribe-events-back">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
	</p>

	<!-- Notices -->
	<?php if(tribe_is_past_event() && tribe_event_in_category('ccac-event')) : ?>
	<?php else : ?>
	<?php tribe_the_notices() ?>
	<?php endif; ?>
	<?php //the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>



	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-header -->

				<div class="w-layout-grid grid-event-template">
					<!-- THE SIDEBAR  -->
					<div class="sidebar">
						<div class="date-wrap">
							<?php //echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
							 <div class="date-cal-list">
								<?php echo tribe_get_start_date( $post->ID, true, 'm' ) . '.'; ?>
							</div>
							<div class="date-cal-list">
								<?php echo tribe_get_start_date( $post->ID, true, 'j' ) . '.'; ?>
							</div>
							<div class="date-cal-list">
								<?php echo tribe_get_start_date( $post->ID, true, 'Y' ); ?>
							</div>
						</div>
		
						<div>	
								
								<?php tribe_get_template_part( 'modules/meta/venue' ); ?>
						</div>
						<?php if (tribe_is_past_event()) : ?>
						<?php else : ?>
							<div>	
									
									<div class="icon-event icon-event--template"></div>
									
									<?php echo tribe_get_start_time(); ?> - <?php echo tribe_get_end_time(); ?>
									
							</div>
							<div>
									<?php tribe_get_template_part( 'modules/meta/details'); ?>
							</div>
							<!-- <div>
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

							</div> -->
							
						
						<?php if ( tribe_get_cost() ) : ?>
								<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<!-- … END THE SIDEBAR  -->
					<div class="bb-event-content">
						<?php while ( have_posts() ) :  the_post(); ?>
							<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<!-- Event featured image, but exclude link -->
								<?php //echo tribe_event_featured_image( $event_id, 'full', false ); ?>

								<!-- Event content -->
								<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
								<?php if (tribe_is_past_event()) : ?>
									<?php the_field('archived_event_description') ?>
								<?php else : ?>
								<div class="tribe-events-single-event-description tribe-events-content">
									<?php the_content(); ?>
								</div>
								<?php endif; ?>
								<!-- .tribe-events-single-event-description -->
								<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

								<!-- Event meta -->
								<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
								<?php if (tribe_is_past_event()) : ?>
								<?php else : ?>
								<?php tribe_get_template_part( 'modules/meta' ); ?>
								<?php endif; ?>
								<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
							</div> <!-- #post-x -->
						<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
							<!-- ARCHIVED SPEAKERS  -->
							<?php if (get_field('add_archive_information')) : ?>
								<div class="mb-40">
									<?php if(get_field('archived_event_speakers')) : ?>
										<h2 class="h2">Speakers</h2>
									
										<?php the_field('archived_event_speakers');
										endif; ?>
									
								</div>
								<div class="mb-40">
									
								<?php if (have_rows('archived_event_files')) : ?>
									<h2 class="h2">Files</h2>
									<ul>
									<?php while ( have_rows('archived_event_files')) : the_row();
									$file_rows = get_field('archived_event_files');
									?>
									
										<?php
											$file_title = get_sub_field('archived_event_file_title');
											$file_upload = get_sub_field('archived_event_file_upload'); ?>
											<li><a href="<?php echo $file_upload; ?>"><?php echo $file_title; ?></a></li>
	
								
									<?php endwhile; ?>
									</ul>
									<?php endif; ?>
									</div>
								<div class="mb-40">
									
								<?php if (have_rows('archived_event_videos')) : ?>
									<h2 class="h2">Videos</h2>
									<?php while ( have_rows('archived_event_videos')) : the_row();
									$file_rows = get_field('archived_event_videos');
									?>
									
										<?php
											$video_title = get_sub_field('archived_event_video_title');
											$video_url = get_sub_field('archived_event_video_url'); ?>
											<h3><?php echo $video_title; ?></h3>
											<?php echo $video_url; 
										?>

									<?php endwhile; ?>
									
									<?php endif; ?>
									</div>

							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				
				</div>



	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->


