@extends( 'views.master' )

@section( 'main' )

</div></div>
<div class="parallax-window" data-z-index="100" data-parallax="scroll" data-image-src="{{ shipyard_get_featured_image_src() }}"></div>
<div class="site-container"><div class="site-content">

    @while( have_posts() )
        {{ the_post() }}

        @include( 'views.pages.front' )

    @endwhile

    <section class="frontpage-blogs">
        <header>
            <h2>{{ __( 'Latest blog posts', 'gram' ) }}</h2>
        </header>

        <div class="frontpage-blogs--container">
            @include( 'views.pages.frontpage-blogs' )
        </div>
    </section>

@endsection
