@extends( 'views.master' )

@section( 'main' )

    <section class="page container">
        <div class="page-content">

            @while( have_posts() )
                {{ the_post() }}

                <article {{ post_class() }}>

                    <div class="post-content">
                        {{ the_content() }}
                    </div>

                </article>
            @endwhile

        </div>
    </section>

@endsection
