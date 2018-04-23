<section class="related resources" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<div class="title">
			<h2>Resources</h2>
		</div>

		<div class="wrapper">

			@foreach ($resources as $resource)

				<?php $section = $resource->section ?: 'content'; ?>

				@include( $resource->extends, [
					'page' => $page->merge($resource),
					$section => $resource->getContent()
				])

			@endforeach

		</div>

	</div>
</section>
