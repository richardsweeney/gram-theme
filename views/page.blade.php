@extends( 'views.master' )

@section( 'main' )

    <section class="posts-list">

        @while( have_posts() )
            {{ the_post() }}

            @include( 'views.pages.page' )
        @endwhile

    </section>

    @include( 'views.common.sidebar' )

@endsection
