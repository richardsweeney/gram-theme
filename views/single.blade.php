@extends( 'views.master' )

@section( 'main' )

@if( has_post_thumbnail() )
    </div></div>
    <div class="parallax-window" data-z-index="100" data-parallax="scroll" data-image-src="{{ shipyard_get_featured_image_src() }}"></div>
    <div class="site-container"><div class="site-content">
@endif

    <section class="posts-list">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.single' )
        @endwhile

    </section>

    @include( 'views.common.sidebar' )

@endsection
