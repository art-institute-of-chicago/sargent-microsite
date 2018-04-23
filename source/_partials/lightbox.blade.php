{{-- Artwork contents go into script tags to be used as lightbox templates --}}
{{-- http://stackoverflow.com/questions/4912586/explanation-of-script-type-text-template-script --}}
@foreach ($artworks as $artwork)

	<script id="artwork-{{ $artwork->id }}" type="text/template">

		<a href="javascript:Lightbox.expand()" class="btn-toggle-invisible"></a>

		<a href="javascript:Lightbox.expand()" class="btn-toggle btn-hide">
			<span>Hide</span>
		</a>

		<p id="lightbox-start">
			{{ $artwork->artistName}}<br/>
			{{ $artwork->artistPlaceDates}}
		</p>

		<h1 tabindex="0">{{ $artwork->title }}</h1>

		<p>
			{{ $artwork->date }}<br/>
			{{ $artwork->materialDimensions }},
			{{ $artwork->creditAccessionNumber }}
		</p>

		<blockquote>
			{!! $artwork->getContent() !!}
		</blockquote>

		{{-- For some reason,empty() or isset() always return false here --}}
		{{-- Must be something to do with getters and setters--}}

		@if( strlen( $artwork->link ) > 0 )
			<p><a href="{{ $artwork->link }}" target="_blank" class="collection">See in our Collection</a></p>
		@endif

		<a href="javascript:Lightbox.expand()" class="btn-toggle btn-show" aria-label="Read more">
			<span>▲</span>
		</a>

		<div id="artwork-{{ $artwork->id }}-image" data-image="{{ $artwork->image }}" />

	</script>

@endforeach


{{-- lightbox.js manages this magic --}}
<div id="lightbox-underlay" role="presentation">
	<a href="javascript:;" class="btn-close"></a>
</div>

<div id="lightbox" role="dialog" aria-labelledby="lightbox-start">

	<a href="javascript:Lightbox.unload()" class="btn-close">
		<svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<desc>Close lightbox</desc>
			<defs></defs>
			<g stroke="none" stroke-width="1.75" fill="white" fill-rule="evenodd">
				<g stroke="#686868">
					<g transform="translate(1,1)">
						<circle stroke-opacity="1" cx="19" cy="19" r="19"></circle>
						<path d="M11,11 L26,26" stroke-linecap="square"></path>
						<path d="M11,11 L26,26" stroke-linecap="square" transform="translate(19, 19) scale(-1, 1) translate(-19, -19)"></path>
					</g>
				</g>
			</g>
		</svg>
	</a>

	<div id="viewer">
		{{-- OpenSeadragon viewer --}}
	</div>

	{{-- This is in a separate div b/c it needs to be relative to wrapper  --}}
	<div id="content">
		{{-- Content of the _artworks will be inserted here --}}
		{{-- Don't hard-code any other elements inside here, they'll be replaced --}}
		{{-- Instead, put them in the <script> tag in @foreach $artworks --}}
	</div>

</div>
