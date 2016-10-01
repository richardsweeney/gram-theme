@extends( 'views.master' )

@section( 'main' )

    @while( have_posts() )
        {{ the_post() }}

        <div class="container sections-container">

            <article {{ post_class() }}>

                <header class="sections-page-header">
                    <h1>{{ the_title() }}</h1>
                </header>

                @foreach ( $sections as $section )
                    @if ( 'circlular-image-with-text' === $section['_layout'] )
                        <div class="sections-section circular-image-with-text {{ $section['alignment'] or '' }}">
                            <div class="sections-section__image">
                                {!! gram_papi_get_image( $section['image'], 'square' ) !!}
                            </div>
                            <div class="sections-section__text">
                                @if ( ! empty( $section['title'] ) )
                                    <h3>{{ $section['title'] }}</h3>
                                @endif

                                {!! $section['text'] !!}
                            </div>
                        </div>
                    @elseif ( 'wide-image-with-text' === $section['_layout'] )
                        <div class="sections-section wide-image-with-text">
                            <div class="sections-section__text">
                                @if ( ! empty( $section['title'] ) )
                                    <h3>{{ $section['title'] }}</h3>
                                @endif

                                {!! $section['text'] !!}
                            </div>
                            <div class="sections-section__image">
                                {!! gram_papi_get_image( $section['image'], 'large-banner' ) !!}
                            </div>
                        </div>
                    @endif
                @endforeach

            </article>

        </div>

    @endwhile

@endsection
