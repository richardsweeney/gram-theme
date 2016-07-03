@extends( 'views.master' )

@section( 'main' )

    @while( have_posts() )
        {{ the_post() }}

        <article {{ post_class() }}>

            @if ( has_post_thumbnail() )
                <div class="post-thumbnail-container">
                    {{ the_post_thumbnail( 'large' ) }}
                </div>
            @endif

            <header>
                <h1>{{ the_title() }}</h1>
            </header>

            <div class="post-content">
                {{ the_content() }}
            </div>

        </article>
    @endwhile

@endsection
