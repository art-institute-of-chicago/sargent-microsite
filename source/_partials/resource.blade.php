<div class="resource item">

	<h5>{{ $page->type }}</h5>

	<a href="{{ $page->link }}" target="_blank">
		<h4>{{ $page->title }}</h4>
	</a>

	@if ($page->image)
		@if ($page->link)
			<a href="{{ $page->link }}" target="_blank">
		@endif
		<img src="{{ $page->image }}" alt="{{ $page->alt }}"/>
		@if ($page->link)
			</a>
		@endif
	@endif

	</p>

</div>
