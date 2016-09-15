@extends( 'views.master' )

@section( 'main' )

    <section class="container">

        <header>
            <h1>{{ the_archive_title() }}</h1>
        </header>

        <div class="posts-list">

            @while( have_posts() )
                {{ the_post() }}
                @include( 'views.posts.excerpt' )
            @endwhile
        </div>

    </section>

    <section class="pagination container">
        {!! paginate_links() !!}
    </section>

@endsection
