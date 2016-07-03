@extends( 'views.master' )

@section( 'main' )

    <section class="posts-list">

        <header>
            <h1>{{ the_archive_title() }}</h1>
        </header>

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.excerpt' )
        @endwhile

    </section>

    <aside class="sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ) ?>
    </aside>

@endsection
