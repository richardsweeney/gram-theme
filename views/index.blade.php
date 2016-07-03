@extends( 'views.master' )

@section( 'main' )

    <div class="posts-list">

        @while( have_posts() )
            {{ the_post() }}

            <article {{ post_class() }}>

                <header>
                    <h2><a href="{{ the_permalink() }}">{{ the_title() }}</a></h2>
                </header>

                <footer>
                    <p>{{ __( 'Published', 'shipyard' ) }}: <time datetime="{{ the_time( 'Y-m-d H:i:s' ) }}">{{ date_i18n( get_option( 'date_format' ) ) }}</time> {{ __( 'in', 'shipyard' ) }} {{ the_category( ', ') }}. {{ the_tags( __( 'Tags: ', 'shipyard' ), ', ', ' ' ) }}</p>
                </footer>

                {{ the_content() }}
            </article>
        @endwhile

    </div>

@endsection
