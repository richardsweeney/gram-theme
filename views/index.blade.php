@extends( 'views.master' )

@section( 'main' )

    <section class="posts-list container">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.excerpt' )
        @endwhile

    </section>

    <section class="pagination container">
        {!! paginate_links() !!}
    </section>

@endsection
