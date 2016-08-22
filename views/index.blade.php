@extends( 'views.master' )

@section( 'main' )

    {{--<header>
        <div id="js-parallax-window" class="parallax-window" style="background: url('{{ wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) }}') no-repeat; background-size: cover;">
            <div class="parallax-static-content">
            <h1 class="page-title">{{ the_title() }}</h1>
            </div>
            <div id="js-parallax-background" class="parallax-background"></div>
        </div>
    </header>--}}


    <section class="posts-list">

        @while( have_posts() )
            {{ the_post() }}
            @include( 'views.posts.excerpt' )
        @endwhile

    </section>

@endsection
