@extends( 'views.master' )

@section( 'main' )

    <div class="single-posts-container container">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.single' )
        @endwhile

        <div class="single-post-pagination">
            <span class="prev-posts-link">{{ previous_post_link() }}</span>
            <span class="next-posts-link">{{ next_post_link() }}</span>
        </div>

    </div>

@endsection
