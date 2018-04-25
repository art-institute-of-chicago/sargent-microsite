<!-- Sticky Header -->
<div id="header-placeholder" role="presentation">

<header role="banner">
    <div class="container">

        <div class="header-left">

            <a href="http://www.artic.edu/" target="_blank">
                <img src="images/aic.svg" alt="Art Institute of Chicago">
            </a>

            <span class="exhibit">
                <span class="title">John Singer Sargent</span>
            </span>

        </div>

        <div class="header-right">

            <span class="dates">
                <span class="start">{{ $page->dates['start'] }}</span
                ><span class="dash"> – </span
                ><span class="end">{{ $page->dates['end'] }}</span>
            </span>

            <span class="buttons" role="menu">
                <a class="btn btn-small btn-alt btn-member" href="https://sales.artic.edu/memberships" target="_blank" role="menuitem">Become a Member</a>
                <a class="btn btn-small btn-ticket" href="https://sales.artic.edu/admissiondate" target="_blank" role="menuitem"><span class="verb">Buy </span>Tickets</a>
            </span>

        </div>

    </div>


    @if ($page->subHeader)
        <div class="sub-header">
            {{ $page->subHeader }}
        </div>
    @endif

</header>

{{-- Wrapping header into the placeholder prooved to provide smoother transitions --}}
</div>