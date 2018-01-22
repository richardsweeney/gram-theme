@extends( 'views.master' )

@section( 'main' )

    @while( have_posts() )
        {{ the_post() }}


        <div class="container">

            <article {{ post_class() }}>

                @if (gram_is_woocommerce())

                    <header>
                        <h1>{{ the_title() }}</h1>
                    </header>

                    <div class="post-content">
                        {{ the_content() }}
                    </div>

                @else

                    @if ( has_post_thumbnail() )
                        <div class="single-post-feat-image">
                            {{ the_post_thumbnail( 'large' ) }}
                        </div>
                    @endif

                    <div class="centered-content single-post-main-content">
                        <header>
                            <h1>{{ the_title() }}</h1>
                        </header>

                        <div class="post-content">
                            {{ the_content() }}
                        </div>
                    </div>

                @endif

            </article>

        </div>

    @endwhile

@endsection
