<section class="slideshow" role="landmark">

	<!-- Slider main container -->
	<div class="swiper-container">

		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			<!-- Slides -->
			@foreach ($page->images as $index => $image)
				<div class="swiper-slide" data-hash="{{ ++$index }}">

					<div
						class="slide-mobile"
						style="background-image: url('images/content/slideshow-mobile-{{$image}}.jpg')"
					></div>

					<div
						class="slide-desktop"
						style="background-image: url('images/content/slideshow-desktop-{{$image}}.jpg')"
					></div>

				</div>
			@endforeach

		</div>

		<!-- Pagination -->
		<div class="swiper-pagination"></div>

	</div>

	<div class="title-card">

		<img src="images/gauguin-logo.svg" alt="Gauguin, Artist as Alchemist"/>

		<div class="events">

			<div class="event event-exhibit">
				<span class="title">Exhibition</span>
				<span class="date">June 25 • Sept 10</span>
			</div>

		</div>

	</div>

	{{-- {!! $content !!} --}}

</section>
