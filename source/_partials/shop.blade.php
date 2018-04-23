<section class="related shop" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<div class="title">
			<h2>Shop</h2>

			<p><a href="{{ $page->link }}" target="_blank" class="btn-small">See all products</a></p>
		</div>

		<div class="wrapper">

			@foreach ($shop as $item)

				<?php $section = $item->section ?: 'content'; ?>

				@include( $item->extends, [
					'page' => $page->merge($item),
					$section => $item->getContent()
				])

			@endforeach

		</div>

	</div>
</section>
