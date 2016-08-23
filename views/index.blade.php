@extends( 'views.master' )

@section( 'main' )


    <section class="posts-list">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.excerpt' )
        @endwhile

    </section>

@endsection
