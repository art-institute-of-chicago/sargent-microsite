<section class="slideshow" role="landmark">

	<!-- Slider main container -->
	<div class="swiper-container">

		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			<!-- Slides -->
			@foreach ($page->images as $index => $image)
				<div class="swiper-slide" data-hash="{{ ++$index }}">

					<div
						class="slide-foobar slide-mobile"
						data-slide-image="{{$image}}"
					></div>

				</div>
			@endforeach

		</div>

		<!-- Pagination -->
		<div class="swiper-pagination"></div>

	</div>

	<div class="title-card">

		<img src="images/sargent-lockup.svg" alt="John Singer Sargent & Chicago's Gilded Age; July 1 – September 30"/>

	</div>

	{{-- {!! $content !!} --}}

</section>
