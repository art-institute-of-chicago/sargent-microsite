<section class="related resources" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
    <div class="container">

        <div class="title">
            <h2>Enhance your visit</h2>

            <p><a href="{{ $page->link }}" target="_blank" class="btn-related">Learn more</a></p>
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
