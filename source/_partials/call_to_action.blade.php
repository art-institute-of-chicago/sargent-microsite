<section class="call-to-action" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<h1>{{ $page->title }}</h1>

		<ul>
			<li><a href="{{ $page->buttonOneLink }}" target="_blank" class="btn-small">{{ $page->buttonOne }}</a></li>
			<li><a href="{{ $page->buttonTwoLink }}" target="_blank" class="btn-small">{{ $page->buttonTwo }}</a></li>
		</ul>

		<h3>{{ $page->dates }}</h3>

		{!! $content !!}

        <p><a href="{{ $page->buttonThreeLink }}" target="_blank" class="btn-small">{{ $page->buttonThree }}</a></p>


	</div>
</section>
