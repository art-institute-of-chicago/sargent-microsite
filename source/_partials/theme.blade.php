<?php

	// For single-image themes, `variant` is required in YAML.
	// Set it to either "portrait" or "landscape"
	// If it's omitted, CSS will default it to "portrait"
	$variant = $page->variant ? ' theme-' . $page->variant : '';

?>

<section class="theme theme-{{ count($page->images) }}{{ $variant }}" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<h2>{{ $page->theme }}</h2>

		<div class="wrapper">

			{{-- We are gonna assume that all four images were defined --}}
			@foreach ($page->images as $key => $image)

				{{-- .image-* will be used to order elements using flexbox --}}
				<div class="image image-{{ $key + 1 }}" role="figure">

					{{-- We need an <a> wrapper regardless for layout! --}}
					<a class="lightbox" href="javascript:Lightbox.load('{{ $image['lightbox'] }}', '{{ $page->getFilename() }}-{{ $key + 1 }}');" aria-haspopup="true">
						<img id="{{ $page->getFilename() }}-{{ $key + 1 }}" src="images/content/{{ $image['image'] }}" alt="{{ $image['alt'] }}"/>
					</a>

				</div>

			@endforeach

			<div class="content">

				<h1>{{ $page->title }}</h1>

				{!! $content !!}


			</div>

		</div>

	</div>
</section>
