@extends( 'views.master' )

@section( 'main' )

    @while( have_posts() )
        {{ the_post() }}

        <div class="container">

            <article {{ post_class() }}>

                <header class="sections-page-header">
                    <h1>{{ the_title() }}</h1>
                </header>

                @foreach ( $sections as $section )
                    <div class="sections-section {{ $section['_layout'] }} {{ $section['alignment'] or '' }}">
                        <div class="sections-section__image">
                            {!! gram_papi_get_image( $section['image'] ) !!}
                        </div>
                        <div class="sections-section__text">
                            @if ( ! empty( $section['title'] ) )
                                <h3>{{ $section['title'] }}</h3>
                            @endif

                            {!! $section['text'] !!}
                        </div>
                    </div>
                @endforeach

            </article>

        </div>

    @endwhile

@endsection
