<section class="call-to-action" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<h1>{{ $page->title }}</h1>

		<h2><a href="{{ $page->subtitleLink }}">{{ $page->subtitle }}</a></h2>

		<ul>
			<li><a href="{{ $page->buttonOneLink }}" target="_blank" class="btn btn-large btn-alt">{{ $page->buttonOne }}</a></li>
			<li><a href="{{ $page->buttonTwoLink }}" target="_blank" class="btn btn-large">{{ $page->buttonTwo }}</a></li>
		</ul>

		<h3>{{ $page->dates }}</h3>

		{!! $content !!}

	</div>
</section>
