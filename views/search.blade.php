@extends( 'views.master' )

@section( 'main' )

    <section class="posts-list">

        <div class="container">

            <header>
                <h1>{{ __( 'Search results for' ) }} <span class="search-term">"{{ the_search_query() }}"</span></h1>
            </header>

            <div class="search-results-container">

                @if( have_posts() )
                    @while( have_posts() )
                        {{ the_post() }}
                        @include( 'views.posts.excerpt' )
                    @endwhile
                @else
                    <p>{{ __( "No results found. Maybe you'd like to try searching again?", 'gram' ) }}</p>
                    <div class="search-form-container">
                        {!! get_search_form( false ) !!}
                    </div>
                @endif

            </div>

        </div>

    </section>

@endsection
