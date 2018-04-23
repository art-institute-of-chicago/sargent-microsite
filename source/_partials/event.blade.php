<div class="event item">

	<h5>{{ $page->type }}</h5>

	<a href="{{ $page->link }}" target="_blank">
		<h4>{{ $page->title }}</h4>
	</a>

	<p>

		@if ($page->summary)
			{{ $page->summary }}<br/>
		@endif

		{{ $page->date }}<br/>{{ $page->time }}

	</p>

</div>
