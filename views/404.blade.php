@extends( 'views.master' )

@section( 'main' )

    <div class="container four04-container">

        <article {{ post_class() }}>

            <h1>{{ __( '404 - Page not found', 'gram' ) }}</h1>

            <p>{{ __( "Sorry, something went wrong.", 'gram' ) }}</p>

        </article>

    </div>

@endsection
