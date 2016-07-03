<article id="post-{{ get_the_ID() }}" {{ post_class() }}>

    <header>
        <h1>{{ the_title() }}</h1>
    </header>

    {{ the_post_thumbnail( 'full' ) }}

    {{ the_content() }}

    <footer>
        <p>{{ __( 'Published', 'gram' ) }}: <time datetime="{{ the_time( 'Y-m-d H:i:s' ) }}">{{ date_i18n( get_option( 'date_format' ) ) }}</time> {{ __( 'in', 'gram' ) }} {{ the_category( ', ') }}. {{ the_tags( __( 'Tags: ', 'gram' ), ', ', ' ' ) }}</p>
    </footer>

</article>
