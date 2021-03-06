<?php
/**
 * View: Latest Past View - Single Event Date
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/latest-past/event/date.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://m.tri.be/1aiy
 *
 * @since 5.1.0
 * @since 5.1.1 Move icons into separate templates.
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 *
 * @version 5.1.1
 */
use Tribe__Date_Utils as Dates;

$event_date_attr = $event->dates->start->format( Dates::DBDATEFORMAT );

?>
<div class="tribe-events-calendar-latest-past__event-datetime-wrapper tribe-common-b2">
	<?php $this->template( 'latest-past/event/date/featured' ); ?>
	<time class="tribe-events-calendar-latest-past__event-datetime" datetime="<?php echo esc_attr( $event_date_attr ); ?>">
		<?php //echo $event->schedule_details->value(); ?>
    <?php
    if( $event->dates->start_display->format_i18n( 'g:i A' ) !== '12:00am' ) {
      echo $event->dates->start_display->format_i18n( 'g:ia' );
      echo ' - ';
      echo $event->dates->end_display->format_i18n( 'g:ia' );
    } else {
      echo 'All day';
    }
    ?>
	</time>
	<?php //$this->template( 'latest-past/event/date/meta', [ 'event' => $event ] ); ?>
</div>
