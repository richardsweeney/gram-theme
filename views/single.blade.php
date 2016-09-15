@extends( 'views.master' )

@section( 'main' )

    <div class="single-posts-container container">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.single' )
        @endwhile

    </div>

@endsection
