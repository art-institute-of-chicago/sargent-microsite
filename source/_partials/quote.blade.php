<section class="quote">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>

	<div class="background" style="background-image: url('{{ $page->image }}');" role="presentation"></div>

	<div class="container">

		<blockquote class="balance-text">
			{!! $content !!}
		</blockquote>

	</div>

</section>
