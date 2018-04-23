<section class="related events" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<div class="title">
			<h2>Upcoming Events</h2>

			<p><a href="{{ $page->link }}" target="_blank" class="btn-small">See all events</a></p>
		</div>

		<div class="wrapper">

			<?php

				// Don't show events before current date
				$events = $events->filter( function( $event ) {

					// TODO: Figure out why it's "yesterday" and not "now" or "today"
					// For some reason, moving $now definition out of the filter loop breaks it!
					$now = new DateTime( "yesterday" );
					$now = $now->format('Y-m-d');

					$day = new DateTime( date("Y-m-d", $event->sortOrder) );
					$day = $day->format('Y-m-d');

					$check = $day >= $now;

					// DEBUGGING:
					// print_r( $now . ' + ' . $day . ' = ' . ($check) . "\n" );

					return ( $check );

				});

			?>

			@foreach ($events->slice(0,6) as $event)

				<?php $section = $event->section ?: 'content'; ?>

				@include( $event->extends, [
					'page' => $page->merge($event),
					$section => $event->getContent()
				])

			@endforeach

		</div>

	</div>
</section>
