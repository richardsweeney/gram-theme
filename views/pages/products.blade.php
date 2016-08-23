@extends( 'views.master' )

@section( 'main' )

<article id="products" {{ post_class() }}>

    <header>
        <h1>{{ the_title() }}</h1>
    </header>
	bla bla bla
    {{ var_dump('loop')}}



</article>

@endsection



